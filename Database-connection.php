<?php
session_start();
$conn= mysql_connect('localhost', 'root', '') OR die("Error Occurs");
mysql_select_db('pampers' , $conn);
require_once './admin.php';
?>

