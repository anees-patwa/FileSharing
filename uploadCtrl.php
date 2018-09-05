<?php
session_start();
require("makeUploadPath.php");

$filename = basename($_FILES['uploadedfile']['name']);
$username = $_SESSION['username'];

$path = makeUploadPath($username, $filename);

if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $path) ){
	header("Location: homeView.php");
	exit;
}else{
	header("Location: failedUpload.html");
	exit;
}

?>