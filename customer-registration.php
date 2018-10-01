
<?php
require_once 'admin.php';
$admin->check_admin();
require_once './Database-connection.php';
if(isset($_POST['Add']))
{
    $name=$_POST['Owner-Name'];
    $area=$_POST['Area'];
    $shop=$_POST['Shop-Name'];
   $query1="SELECT * FROM `customer-registration` WHERE `Owner-Name` = '".$name."' AND `Shop-Name` = '".$shop."' AND `Area` = '".$area."' ";
    $res = mysql_query($query1);
    $row = mysql_fetch_assoc($res);
        if(!empty($row))
        {
            echo "<script>"
                ."alert('Already Registered');"
            . "</script>";
        }
        else 
        {
    $query = "INSERT INTO `customer-registration` (`Customer-ID`, `Owner-Name`, `Area`, `Shop-Name`) VALUES (null, '".$name."', '".$area."', '".$shop."')";
     $rs = mysql_query($query);
          if($rs === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if($rs)
        {
            echo "<script>"
                ."alert('Register Successfully');"
            . "</script>";
            header("location: All_Customers.php");
        }
        else
        {
            echo '<div><h1>Register Fail.....</h1></div>';
        }
        }  
}
?>     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
  <head>
<?php
require_once './Assets/script.php';
?> 
 </head>
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="inner-content">
     <!-- header-starts -->
<?php
require_once './Assets/header.php';
require_once './Database-connection.php';
?>
<!-- //header-ends -->
        <div class="outter-wp">
     <!-- /script-for sticky-nav -->               
<!--inner block start here-->
<div class="col-md-12" >
    <div class="panel panel-primary">
        <br><br>    <br><br>
        <div style="margin-top: -60px;" class="panel-heading"><i class="fa fa-user"></i> Customer Registration</div>
        <div class="panel-body"> 
            <div class="forms-inner">
<!--/set-1-->
      <div class="set-1">
    <div class="col-md-6 graph-2">

    <div class="grid-1">
    <div class="form-body">
        <form method="POST" action="#" class="form-horizontal">
            <div class="form-group"> 
                <label for="O-Name" style="margin-top: -5px;" class="col-sm-2 control-label">Owner</label>
                <div class="col-sm-9">
                    <input type="text" name="Owner-Name" class="form-control" id="Owner-Name" placeholder="Owner-Name">
                </div>
            </div> 
            <div class="form-group">
                <label for="area" style="margin-top: -5px;" class="col-sm-2 control-label">Area</label>
                <div class="col-sm-9"> 
                    <input type="text" class="form-control" id="area" name="Area" placeholder="area">
                </div>
            </div>
            <div class="form-group">
                <label for="SN" style="margin-top: -5px;" class="col-md-2 control-label">Shop</label>
                <div class="col-sm-9">
                    <input type="text" name="Shop-Name" class="form-control" id="SN" placeholder="SN">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2" style="margin-left: 460px;">
                    <button type="submit" name="Add" class="btn btn-default">Add</button>
                </div>
        </form> 
    </div>
    </div>
    </div>
     <div class="clearfix"> </div>
    </div>
      </div>
</div>
</div>
</div>
</div>
        </div>
 <!--footer section start-->
        <?php
  require_once './Assets/footer.php';
         ?>
<!--footer section end-->
</div>
</div>
                        <!--//content-inner-->
			<!--/sidebar-menu-->
                        <?php
 require_once './Assets/slidebar_menu.php';
                           ?>
				<!--/slidebar-menu-->
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>

