<?php
session_start();
require("makeUploadPath.php");

$filename = basename($_FILES['uploadedfile']['name']);
error_log($filename, 0);
$username = $_SESSION['userID'];

$path = makeUploadPath($username, $filename);
// chgrp($_FILES['uploadedfile']['tmp_name'], "module2");
// chown($_FILES['uploadedfile']['tmp_name'], "apatwa");
 chmod($_FILES['uploadedfile']['tmp_name'], 0740);
if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path) ){
	header("Location: homeView.php");
	exit;
}else{
	header("Location: failedUpload.html");
	exit;
}

?>