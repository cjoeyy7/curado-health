<?php
include('connection.php');
session_destroy();
unset($_SESSION['name']);
unset($_SESSION['surname']);
unset($_SESSION['email']);
header('location:index.php');

?>