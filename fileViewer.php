<?php
session_start();
ob_start();
require("checkUserLoggedIn.php");
  require("navBar.php");
  require("makeUploadPath.php");
  


$filename = $_GET['NAME'];

if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}

$username = $_SESSION['userID'];
if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$full_path = makeUploadPath($username, $filename);

$finfo = new finfo(FILEINFO_MIME_TYPE);
$mime = $finfo->file($full_path);

ob_end_clean();
header("Content-Type: ".$mime);
readfile($full_path);
ob_end_flush();
?>
    
