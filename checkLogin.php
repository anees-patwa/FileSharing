<?php
session_start();
ob_start();
    $userID = $_POST['userID'];
    $file = fopen("/srv/module2Files/users.txt", "r");
    $_SESSION['userID'] = $userID;
    while(!feof($file)){
        $check = trim(fgets($file));
        if(strcmp($check, $userID) == 0){
            ob_end_clean();
            header("Location: homeView.php");
            exit();
        }
        else{
            header("Location: loginView.php");
        }
  }

fclose($file);
    ob_end_flush();
?>
