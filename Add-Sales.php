     
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
{    $sm = $_POST['sm'];
    // to get previous stock and subtract with new one
    $stock = $_POST['quantity'];
    $s=$_POST['size'];
    $query="SELECT `Remaining-Stock` FROM `stock` WHERE `Size` = '$s' ";
    $result = mysql_query($query);
    $row = mysql_fetch_row($result);
    $stock1 = $row[0];
    if($stock1 >= $stock){
    $remaining = ($stock - $stock1) * -1;
     // update stock
    $query1 = "UPDATE `stock` SET `Remaining-Stock` = '$remaining' WHERE `Size` = '$s' ";
          $rs = mysql_query($query1);
          if($rs === \FALSE) { 
    die(mysql_error()); // TODO: better error handling
      }
      // sales query
      $query2= "INSERT INTO `sales`(`Size`, `Quantity`, `SM-Name`, `Cash-Sale`, `Reg-Cust-Sale`, `Debit`, `Credit`) VALUES ('".$_POST['size']."', '".$_POST['quantity']."', '".$sm."', '".$_POST['rcs']."', '".$_POST['rcs']."', '".$_POST['debit']."', '".$_POST['credit']."') ";
     $result2= mysql_query($query2)  ; 
      if($result2 === \FALSE) { 
    die(mysql_error()); // TODO: better error handling
      }
        if($result2)
        {
            echo "<script>"
                ."alert('Register Successfully');"
            . "</script>";
            header("location: Stock.php");
        }
        else
        {
            echo '<div><h1>Register Fail.....</h1></div>';
        }
    }
    else {
         "<script>"
                ."alert('Stock is less than sales quantity');"
            . "</script>";;
    }
 }    
?>
                                                                                             
                                                    
		<!-- /script-for sticky-nav -->               
<!--inner block start here-->
<div class="col-md-12" >
    <div class="panel panel-primary">
        <br><br><br>
        <div style="margin-top: -60px;" class="panel-heading"><i class="fa fa-shopping-bag"></i> Add Sales</div>
        <div class="panel-body"> 
            <div class="forms-inner">
            <!--/set-1-->
            <div class="set-1">
            <div class="col-md-6 graph-2">

                        <div class="grid-1">
                            <div class="form-body">
                                <form class="form-horizontal" method="POST">
                                     <div class="form-group">
                                        <label for="quantity" style="margin-top: -5px;" class="col-sm-3 control-label">Quantity:</label>
                                        <div class="col-sm-9"> 
                                            <input type="number" style="padding: 3px;" name="quantity" class="form-control" id="quantity" placeholder="Quantity" >
                                        </div> 
                                    </div>
                                     <div class="form-group">
                                        <label for="size" style="margin-top: -5px;" class="col-sm-3 control-label">Size:</label>
                                        <div class="col-sm-9"> 
                                            <input type="text" name="size" class="form-control" id="size" placeholder="Size">
                                        </div> 
                                    </div>
                                    
                                     <div class="form-group">
                                        <label for="sm" style="margin-top: -5px;" class="col-sm-3 control-label">Salesman:</label>
                                        <div class="col-sm-9"> 
                                            <select class="form-control" name="sm" style="padding: 2px;"  >
                                                    <?php 
                                                    $query = "SELECT `SM-Name` FROM `salesman-details` ";
                                                    $run =  mysql_query($query);
                                                    if(mysql_num_rows($run) > 0){
                                                        while ($row = mysql_fetch_array($run)){
                                                            $salesman =  ucfirst($row['SM-Name']);
                                                           echo  "<option>$salesman</option>";
                                                        }
                                                    }
                                            else {
                                            echo  "<option>No Salesman Yet</option>";
                                            }
                                                    ?>
                                               
                                             </select>
                                        </div> 
                                    </div> 
                                     <div class="form-group">
                                        <label for="debit" style="margin-top: -5px;" class="col-sm-3 control-label">Debit:</label>
                                        <div class="col-sm-9"> 
                                            <input type="number" style="padding: 3px;" name="debit" class="form-control" id="debit" placeholder="debit"> 
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label for="credit" style="margin-top: -5px;" class="col-sm-3 control-label">Credit:</label> 
                                        <div class="col-sm-9">
                                            <input type="number" style="padding: 3px;" name="credit" class="form-control" id="credit" placeholder="credit">
                                        </div> </div> 
                                    <div id="radio">
                                       <div class="form-group">
                                        <label for="cs" style="margin-top: -4px;" class="col-sm-3 control-label">Cash Sale:</label>
                                        <div class="col-sm-1"> 
                                            <input type="radio" name="rcs" class="form-control"  value="unregistered customer"> <div class="form-group">
                                    </div> 
                                        </div> 
                                    </div>
                                    <div class="form-group" style="margin-top: -15px;">
                                        <label for="rcs" style="margin-top: -4px;"  class="col-sm-3 control-label">Reg-Cust-Sale:</label>
                                        <div class="col-sm-1"> 
                                            <input type="radio" name="rcs" class="form-control" id="rcs" value="registered customer" > 
                                        </div>
                                    </div></div>
                                    <div class="form-group" style="display: none;" id="customer">
                                                      <label for="sm" style="margin-top: -5px;" class="col-sm-3 control-label">Owner:</label>
                                        <div class="col-sm-9"> 
                                            <select class="form-control" name="sm" style="padding: 2px;"  >
                                                    <?php 
                                                    $query6 = "SELECT `Owner-Name` FROM `customer-registration` ";
                                                    $run6 =  mysql_query($query6);
                                                    if(mysql_num_rows($run6) > 0){
                                                        while ($row = mysql_fetch_array($run6)){
                                                            $Owner =  ucfirst($row['Owner-Name']);
                                                           echo  "<option>$Owner</option>";
                                                        }
                                                    }
                                            else {
                                            echo  "<option>No Customer Yet</option>";
                                            }
                                                    ?>
                                               
                                             </select>
                                        </div> 
                                                </div>
                                    <div class="form-group">
                                    </div> <div style="margin-left: 485px;" class="col-sm-offset-2">
                                        <button  name="Add" type="submit" class="btn btn-default">Add</button> 
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

