<?php
$userID = $_SESSION['userID'];

$filename = $_POST['filename'];


$currUserDirPath = makeUploadPath($userID, null);

if(is_dir($currUserDirPath)){
    $currUserDir = opendir($currUserDirPath);
    while(($file = readdir($currUserDir)) !== false){
        if(strcomp($file, $filename) == 0){
            //copy file to other person
            if(unlink(makeUploadPath($userID, $filename))){
                header("Location: homeView.php");
            } else {
                header("Location: deleteFailed.html");
            }
        } else {
            header("Location: fileDNE.html");
        }
    }
}
?>