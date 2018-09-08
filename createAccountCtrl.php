<?php
session_start();
$username = $_POST['userID'];

//check valid username
if( !preg_match('/^[\w_\-]+$/', $username) ){
    return "Invalid username";
    
}

//check if username is in users.txt already

$users = fopen("users.txt", "r+");
while (!feof($users)){
    $line = trim(fgets($users));
    if(strcmp($line, $username) == 0){
        header("Location: failedCreation.html");
        exit;
    }
}

//add new user to users.txt
$user = "\n" . $username;
fwrite($users, $user);


//make user's directory and set permissions
require("makeUploadPath.php");
$dirPath = makeUploadPath($username, null);
mkdir($dirPath);
chmod($dirPath, 777);

//set username in session
$_SESSION['username'] = $username;

//send user to their homepage
header("Location: homeView.php");

?>