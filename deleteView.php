<!DOCTYPE html>
<html>

<head>
<title>Delete File</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="loginView.css">
</head>

<?php
require("navBar.php");
?>

<body>
    <div>
        <?php
            require("getFileNames.php");
        ?>
    </div>
        <div class="container" id="login-container">
            <div>
               <h1 id="login">Delete File</h1>
            </div>
            <form action="shareCtrl.php" method="POST">
                <div>
                    <h4 id="user-id">File Name</h4>
                    <input name="filename" id="user-id-input"type="text">
                </div>
                <div>
                     <input id="submit-button" type="submit">
                </div>
            </form>
        </div>
</body>

</html>