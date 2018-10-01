     
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
if(isset($_POST['Add']))
{    $stock= $_POST['stock'];
    $s = $_POST['size'];
    $price = $_POST['price'];
    $Tprice = $price * $stock;
    //stock
    $que="SELECT `Remaining-Stock` FROM `stock` WHERE `Size` = '$s'";
    $result = mysql_query($que);
     $row = mysql_fetch_row($result);
    $stock1 = $row[0];
    $remaining = $stock + $stock1;
    // price query
    $que1="SELECT `Price` FROM `stock` WHERE `Size` = '$s'";
    $result1 = mysql_query($que1);
     $row1 = mysql_fetch_row($result1);
    $remprice = $row1[0];
    
    $Tprice2 = $remprice + $Tprice;
     // update stock
    $query1 = "UPDATE `stock` SET `Remaining-Stock` = '$remaining' , `Price` = '$Tprice2' WHERE `Size` = '$s' ";
          $rs = mysql_query($query1);
          if($rs === \FALSE) { 
    die(mysql_error()); // TODO: better error handling
      }
 }    
?>
                                                                                             
                                                    
		<!-- /script-for sticky-nav -->               
<!--inner block start here-->
<div class="col-md-12" >
<div class="panel panel-primary">
    <br><br>    <br><br>
    <div style="margin-top: -60px;" class="panel-heading"><i class="lnr lnr-chart-bars"></i> Add Stock</div>
    <div class="panel-body"> 
        <div class="forms-inner">
        <!--/set-1-->
        <div class="set-1">
        <div class="col-md-6 graph-2">

        <div class="grid-1">
            <div class="form-body">
                <form class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label for="purchases" style="margin-top: -5px;" class="col-sm-2 control-label">Price:</label>
                        <div class="col-sm-9"> 
                            <input type="text" name="price" class="form-control" id="purchases" placeholder="price per piece">
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="size" style="margin-top: -5px;" class="col-sm-2 control-label">Size:</label>
                        <div class="col-sm-9"> 
                            <input type="text" name="size" class="form-control" id="size" placeholder="size"> 
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="stock" style="margin-top: -5px;" class="col-sm-2 control-label">Stock:</label>
                        <div class="col-sm-9"> 
                            <input type="text" name="stock" class="form-control" id="stock" placeholder="quantity"> 
                        </div>
                    </div>
                     <div class="form-group">
                      </div>
                    <div class="form-group">
                    </div> <div class="col-sm-offset-2">
                        <button name="Add" type="submit" class="btn btn-default">Add</button> 
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

