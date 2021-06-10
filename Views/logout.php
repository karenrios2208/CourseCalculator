<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['pwd']);
unset($_SESSION['name']);
unset($_SESSION['plan']);
header("Location:login.html");
?>