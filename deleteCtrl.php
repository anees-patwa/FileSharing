<?php
session_start();
require("checkUserLoggedIn.php");
$userID = $_SESSION['userID'];

$filename = $_POST['filename'];

require("makeUploadPath.php");
$currUserDirPath = makeUploadPath($userID, null);

if(is_dir($currUserDirPath)){
    $currUserDir = opendir($currUserDirPath);
    while(($file = readdir($currUserDir)) !== false){
        if(strcmp($file, $filename) == 0){
            //copy file to other person
            if(unlink(makeUploadPath($userID, $filename))){
                header("Location: homeView.php");
                exit();
            } else {
                header("Location: deleteFailed.html");
                exit();
            }
        }
    }
    header("Location: fileDNE.html");
    exit();
}
?>