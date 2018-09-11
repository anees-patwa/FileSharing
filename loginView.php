<!DOCTYPE html>
<html>

<head>
<title>User Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="loginView.css">
</head>

<?php
require("loginNavBar.php");
?>

<body>
        <div class="container" id="login-container">
            <div>
               <h1 id="login">User Login</h1>
            </div>
            <form action="checkLogin.php" method="POST">
                 <div>
                    <h4 id="user-id">UserID</h4>
                    <input id="user-id-input" type="text" name="userID">
                </div>
                <div>
                     <input id="submit-button" type="submit">
                </div>
            </form>
        </div>
</body>

</html>