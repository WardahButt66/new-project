     
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
require_once 'admin.php';
$admin->check_admin();
?> 
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
if(!isset($_POST['sub'])){ 
  $query1 = " SELECT * FROM  `factory-purchases` ";
    /* @var $result type */
    $result = mysql_query($query1);
 }?>
  

 <?php
 if(isset($_POST['sub'])){ 
    $search = $_POST['search'];
    $search1 = $_POST['search1'];
    $que = "SELECT * FROM  `factory-purchases` WHERE `Date`  BETWEEN '$search' AND '$search1' ";
    $result = mysql_query($que);
    if($result === "FALSE") { die("mysql_error()"); // TODO: better error handling
}    
    }   
?>                                                                                                                   
<!--inner block start here-->
<div class="col-md-12" >
    <div class="panel panel-primary">
        <br> 
        <a href="Factory-Purchases.php"><button class="btn-success" style="margin-left: 1246px; bottom: auto;">Add Purchases</button></a>
        <div class="panel-heading"><i class="fa fa-cart-plus"></i> Purchase Report</div>
        <div class="panel-body">
            <div class="widgets">
                  <div class="col-lg-4">
                   <div class="input-group"> 
                       <form method="post">
                           <table>
                               <tr>
                           <td>Start-Date:<input type="text" style="margin-left: -20px;" name="search" class="form-control" id="search" placeholder="yyyy/mm/dd"></td>
                           <td>End-Date:<input type="text" style="margin-left: -20px;" name="search1" class="form-control" id="search1" placeholder="yyyy/mm/dd"></td>
                           <td><button type="submit" name="sub" style="margin-top: 34px; " class="btn btn-default">Report</button></td>
                               </tr>
                           </table>
                   </form>
                  </div><!-- /input-group -->
              </div><!--widgets close--><br><br>
               </div>
            <table class="table tab-border table-striped table-hover">
           <thead>
            <tr>
                <th style="text-align: center">Sr #</th>
                <th style="text-align: center">P-ID</th>
                <th style="text-align: center">Purchases</th>
               <th style="text-align: center">Size</th>
               <th style="text-align: center">Debit</th>
               <th style="text-align: center">Credit</th>
               <th style="text-align: center">Date</th>
               <th style="text-align: center">Action</th>
            </tr>
        </thead>
         <tr>
        <?php
        $count=1;
        while($row = mysql_fetch_assoc($result))
        {
        ?>
                <td style="text-align: center"><?php echo $count;?></td>
                <td style="text-align: center"><?php echo $row['P-ID'];?></td>
               <td style="text-align: center"><?php echo $row['Purchases'];?></td>
               <td style="text-align: center"><?php echo $row['Size'];?></td>
               <td style="text-align: center"><?php echo $row['Debit'];?></td>
               <td style="text-align: center"><?php echo $row['Credit'];?></td>
               <td style="text-align: center"><?php echo $row['Date'];?></td>
               <td style="text-align: center"><a href=""><img alt="img" title="Edit" class="my_font_img" style="height:30px; width:30px;" src="images/pencil.png"></a><a href=""><img alt="img" title="Delete" style="height:30px; width:30px;" class="my_font_img" src="images/bt_remove.png"></a></td>
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

