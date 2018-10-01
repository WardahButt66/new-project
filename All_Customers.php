     
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
require_once 'admin.php';
$admin->check_admin();
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
 <?php

$rs=  mysql_query("SELECT * FROM `customer-registration` ")
?>
		<!-- /script-for sticky-nav -->               
<!--inner block start here-->
<div class="col-md-12" >
    <div class="panel panel-primary">
        <a href="customer-registration.php"><button class="btn-success" style="margin-left: 1250px; bottom: auto;">Add Customer</button></a>
        <div class="panel-heading"><i class="fa fa-users"></i> All Customers</div>
        <div class="panel-body">
            <table class="table tab-border table-striped table-hover" id="table">
           <thead>
            <tr>
                <th style="text-align: center">Sr #</th>
                <th style="text-align: center">Customer ID</th>
                <th style="text-align: center">Owner Name</th>
                <th style="text-align: center">Area</th>
                <th style="text-align: center">Shop Name</th>
                <th style="text-align: center">Action</th>
            </tr>
        </thead>
         <tr>
        <?php
        $count=1;
        while ($row = mysql_fetch_assoc($rs))
        {
        ?> 
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['Customer-ID'];?></td>
                <td style="text-align: center"><?php echo $row['Owner-Name'];?></td>
                <td style="text-align: center"><?php echo $row['Area'];?></td>
                <td style="text-align: center"><?php echo $row['Shop-Name'];?></td>
                <td style="text-align: center"><a href="Cust-edit.php?id=<?php  echo $row['Customer-ID']; ?>"><img style="height:30px; width:30px;" alt="img" title="Edit" class="my_font_img" src="images/pencil.png"></a><a href="Cust-del.php?id=<?php  echo $row['Customer-ID']; ?>"><img style="height:30px; width:30px;" alt="img" title="Delete" class="my_font_img" src="images/bt_remove.png"></a></td>
        </tr>
        <?php
        $count++;
        }
        ?>
    </table>
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