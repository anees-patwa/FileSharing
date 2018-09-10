<?php
session_start();

require("makeUploadPath.php");

$currUser = $_SESSION['userID'];
$filename = $_POST['filename'];
$recip = $_POST['userID'];

//check filename is valid
$currUserDirPath = makeUploadPath($currUser, null);

if(is_dir($currUserDirPath)){
    $currUserDir = opendir($currUserDirPath);
    while(($file = readdir($currUserDir)) !== false){
        if(strcomp($file, $filename) == 0){
            //copy file to other person
            if(copy(makeUploadPath($currUser, $filename), makeUploadPath($recip, $filename))){
                header("Location: homeView.php");
            } else {
                header("Location: copyFailed.html");
            }
        } else {
            header("Location: fileDNE.html");
        }
    }
}


?>