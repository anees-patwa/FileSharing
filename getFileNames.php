<?php
  session_start();
  require("makeUploadPath.php");
  $dir = makeUploadPath($_SESSION['userID'], null);

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