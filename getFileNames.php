<?php
  session_start();
  require("makeUploadPath.php");
  $dir = makeUploadPath($_SESSION['userID'], null);
  error_log("This is path opened in getFileNames   " . $dir, 0);
  // Open a directory, and read its contents
  if (is_dir($dir)){
    
    if ($dh = opendir($dir)){
      
      while (($file = readdir($dh)) !== false){
        echo "<a href=fileViewer.php?NAME=" . $file . ">" . $file . "</a><br>" ;
      }
      closedir($dh);
    }
  }

 
  
?>