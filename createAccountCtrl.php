<?php
$username = $_POST['user-id-input'];

//check valid username
if( !preg_match('/^[\w_\-]+$/', $username) ){
    return "Invalid username";
    
}

//check if username is in users.txt already
$users = fopen("/srv/module2Files/users.txt", "w");
while (!feof($users)){
    $line = trim(fgets($users));
    if($line == $username){
        header("Location: failedCreation.html");
        exit;
    }
}

//add new user to users.txt
$user = "\n" . $username;
fwrite($users, $user);

//make user's directory and set permissions
mkdir(sprintf("/srv/module2Files/%s", $username), 0777);


?>