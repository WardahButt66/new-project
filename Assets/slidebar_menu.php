<div class="sidebar-menu">
    <header class="logo">
    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"><h1><span id="logo">Pampers</span> </h1>
    <!--<img id="logo" src="" alt="Logo"/>--> 
</a> 
</header>
   <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
   <!--/down-->
<?php
 require_once './Assets/down_admin.php';

?>
   <!--//down-->
<div class="menu">
        <ul id="menu" >
                <li><a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li id="menu-academico" ><a href="Add-Stock.php"><i class="lnr lnr-chart-bars"></i> <span>Add Stock</span> </a>
                </li>
                 <li id="menu-academico" ><a href="Add-Sales.php"><i class="fa fa-shopping-bag"></i> <span>Add Sales</span> </a>
                </li>
                 <li id="menu-academico" ><a href="Factory-Purchases.php"><i class="fa fa-cart-plus"></i> <span>Factory Purchases</span> </a>
                 </li>
        <li id="menu-academico" ><a href="salesman.php"><i class="fa fa-user"></i> <span>Add Salesman</span> </a>	
         </li>
           <li id="menu-academico" ><a href="customer-registration.php"><i class="fa fa-user"></i> <span>Add Customer</span> </a>	
         </li>
         
        <li id="menu-academico" ><a href="#"><i class="far fa-folder-open"></i> <span>Reports</span> <span class="fa fa-angle-right" style="float: right; margin-top: -18px;"></span></a>
                  <ul id="menu-academico-sub" >
                    <li id="menu-academico-avaliacoes" ><a href="purchase-report.php">Purchase</a></li>
                    <li id="menu-academico-boletim" ><a href="sales-report.php">Sales</a></li>
                     <li id="menu-academico" ><a href="Stock.php"><span> Stock</span></a></li>
                  </ul>
         </li>
         <li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right; margin-top: -18px;"></span></a>
        <ul id="menu-comunicacao-sub" >
                <li id="menu-academico" ><a href="All_Customers.php"><i class="fa fa-users"></i> <span>All Customers</span></a>	
                </li>        
                <li id="menu-academico" ><a href="Purchases.php"><i class="fa fa-cart-plus"></i> <span>All Purchases</span></a>
                </li>
                <li id="menu-academico" ><a href="Sales.php"><i class="fa fa-shopping-bag"></i> <span>All Sales</span></a>
                </li>
                <li id="menu-academico" ><a href="All-Salesman.php"><i class="fa fa-shopping-bag"></i> <span>All Salesman</span></a>
                </li>
        </ul>
      </li>
    </ul>
  </div>
</div>