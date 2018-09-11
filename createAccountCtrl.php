<?php
session_start();
$username = $_POST['userID'];

//check valid username
if( !preg_match('/^[\w_\-]+$/', $username) ){
    return "Invalid username";
    
}

//check if username is in users.txt already

$users = fopen("/srv/module2Files/users.txt", "r+");
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
fclose($users);

//make user's directory and set permissions
require("makeUploadPath.php");
$dirPath = makeUploadPath($username, null);
mkdir($dirPath);
chmod($dirPath, 0777);

//set username in session
$_SESSION['userID'] = $username;

//send user to their homepage
header("Location: homeView.php");

?>