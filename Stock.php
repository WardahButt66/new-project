     
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
if(!isset($_POST['sub'])){ 
  $query1 = " SELECT * FROM  `stock` ";
    /* @var $result type */
    $result = mysql_query($query1);
 }?>
  

 <?php
 if(isset($_POST['sub'])){ 
     $search = $_POST['search'];
    $query = " SELECT * FROM  `stock` WHERE `Size` = '$search' ";
    /* @var $result type */
    $result = mysql_query($query);
 if($result === "FALSE") { die("mysql_error()"); // TODO: better error handling
}
        
    }   
?>
                                                                                             
                                                    
		<!-- /script-for sticky-nav -->               
<!--inner block start here-->
<div class="col-md-12" >
    <div class="panel panel-primary">
        <br> 
        <a href="Add-Stock.php"><button class="btn-success" style="margin-left: 1250px; bottom: auto;">Add Stock</button></a>
        <div class="panel-heading"><i class="lnr lnr-chart-bars"></i> Manage Stock</div>
        <div class="panel-body">
            <div class="widgets">
                  <div class="col-lg-2">
                   <div class="input-group"> 
                       <form method="post">
                           <table>
                               <tr>
                                   <td> <input type="text" name="search" class="form-control" placeholder="Search for..." style="height:30px;   width:200px;"></td>
                                   <td> <button name="sub" class="btn btn-success " type="submit" style="background-color: pink;  padding: 0px; margin-left:10px ; height:30px; width:50px; border: none; text-align: center;">Go!</button></td>
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
                <th style="text-align: center">Stock-ID</th>
               <th style="text-align: center"> Price</th>
               <th style="text-align: center">Size</th>
               <th style="text-align: center">Remaining-Stock</th>
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
                <td style="text-align: center"><?php echo $row['Stock-ID'];?></td>
               <td style="text-align: center"><?php echo $row['Price'];?></td>
               <td style="text-align: center"><?php echo $row['Size'];?></td>
               <td style="text-align: center"><?php echo $row['Remaining-Stock'];?></td>
               <td style="text-align: center"><a href="stock-edit.php?id=<?php  echo $row['Stock-ID']; ?>"><img style="height:30px; width:30px;" alt="img" title="Edit" class="my_font_img" src="images/pencil.png"></a><a href="stock-del.php?id=<?php  echo $row['Stock-ID']; ?>"><img style="height:30px; width:30px;" alt="img" title="Delete" class="my_font_img" src="images/bt_remove.png"></a></td>
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

