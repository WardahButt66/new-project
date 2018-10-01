<?php
unset($_SESSION['Admin_ID']);
 unset($_SESSION['Admin-name']);
 unset($_SESSION['Admin-email']);
 unset($_SESSION['Admin-password']);
header("location: login.php");
?>