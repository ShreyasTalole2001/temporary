<?php
session_start();
unset($_SESSION["Email"]);
unset($_SESSION["loggedIn"]);
header("Location:login.php");
?>