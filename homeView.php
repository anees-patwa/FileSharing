<?php>
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<title>Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="loginView.css">
</head>

<?php
  require("navBar.php");
  
?>


<body>

<div class="container" id="welcome-container">
  <h2 id="welcome"> Welcome <?php echo $_SESSION['userID'];?> </h2>
  <div>
    <h4 style="margin-left: 50px;">File Viewer</h4>
  </div>

<?php
  $dir = $_SESSION['userID'];

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
    
</div>
  
</body>

</html>