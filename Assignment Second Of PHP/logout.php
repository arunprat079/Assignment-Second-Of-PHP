<?php
session_start();


session_destroy($_SESSION['name']);

header("location: login.php");
?>