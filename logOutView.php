<?php
    session_start();
    ob_start();
    session_unset();
    session_destroy();
    require("navBar.php");
    ob_end_clean();
    header("Location: loginView.php");
    exit();
    ob_end_flush();
?>

<!DOCTYPE html>
<html>

<head>
<title>Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="loginView.css">
</head>

