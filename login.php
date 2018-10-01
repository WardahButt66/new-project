<?php
require_once './Database-connection.php';
if(isset($_POST['submit']))
{
    $email=$_POST['Admin-email'];
    $password=$_POST['Admin-password'];
   $query = "SELECT * FROM `admin-details` WHERE `Admin-email` = '$email' AND `Admin-password` = '$password' ";
        $rs = mysql_query($query);
       if($rs === FALSE) { die(mysql_error()); // TODO: better error handling
}
        $row = mysql_fetch_assoc($rs);
        if(!empty($row))
        {
            $_SESSION['Admin-ID'] = $row['Admin-ID'];
            $_SESSION['Admin-name'] = $row['Admin-name'];
            $_SESSION['Admin-email'] = $row['Admin-email'];
            $_SESSION['Admin-password'] = $row['Admin-password'];
           header('location: index.php');
        }
        else {
            header('location: login.php');}    }
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php
require_once './Assets/script.php';
  
?>
<body>
    <!--/login-->
               <div class="error_page">
                                    <!--/login-top-->

            <div class="error-top">
            <h2 class="inner-tittle page">Administrator</h2>
                <div class="login">
                    <h3 class="inner-tittle t-inner">Login</h3>
                    <div class="buttons login">
                            <ul>
                                    <li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
                                    <li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
                                    <div class="clearfix"></div>
                            </ul>
                    </div>
                    <form method="post">
                <input name="Admin-email" type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
                <input name="Admin-password" type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
                <div class="submit"><input name="submit" type="submit" onclick="myFunction()" value="Login" ></div>
                <div class="clearfix"></div>

                <div class="new">
                        <p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
                        <p class="sign">Do not have an account ? <a href="sign.html">Sign Up</a></p>
                        <div class="clearfix"></div>
                </div>
           </form>
            </div>
    </div>
                    <!--//login-top-->
</div>

            <!--//login-->
        <!--footer section start-->
    <div class="footer">
                   <!-- <div class="error-btn">
                    <a class="read fourth" href="index.html">Return to Home</a>
                    </div>-->
       <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
    </div>
            <!--footer section end-->
            <!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>