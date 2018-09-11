<?php
require("checkUserLoggedIn.php");
if(session_destroy()){
    header("Location: logoutView.html");
} else {
    header("Location: homeView.php");
}
?>