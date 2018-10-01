<?php
require_once './Database-connection.php';
class Admin{
    public function check_admin()
    {
        if($_SESSION['Admin-ID'] == "")
        {
            header("location: login.php");
            exit();
        }
    }  
    
    public function log_out()
    {
        unset($_SESSION['Admin_ID']);
        unset($_SESSION['Admin-name']);
        unset($_SESSION['Admin-email']);
        unset($_SESSION['Admin-password']);
        header("location: login.php");
            exit();
        
    }
    
}

$admin = new Admin();
?>
<html>
    <head>
        <title></title>
    </head>
    <body>  
    </body>
</html>
