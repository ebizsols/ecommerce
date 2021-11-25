<?php
session_start();
include'includes/db.php';
include'functions/function.php';



?>
<!DOCTYPE html>
<html>
<head>
	<title>Shop.php</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
 
</head>
<body>
	<!--////////////////// starting top bar///////////////////// -->

	<div id="top">
		<div class="container">
			<div class="row">
			<div class="col-md-6 offer">
				<a href="#" class="btn btn-success btn-sm">
						<?php
                  if(!isset($_SESSION['customer_email'])){
                  echo"Welcome Guest"; 
                  }
                  else{
                  	 echo"Welcome:".$_SESSION['customer_email']."";

                 }

				?> 
				</a>
				<a href="#">Shopping Cart Total Price: PKR<?Php echo total_price();?>, Total Items <?php echo total_items();?></a>
				
			</div> <!-- col md-6 -->

			<div class="col-md-6 ">
				<ul class="menu">
					<li><a href="../customer_registration.php">Register</a></li>
					<li>
        <?php
            if(!isset($_SESSION['customer_email'])){
              echo "<a href='checkout.php'>My Account</a>";
            }
            else{
              echo "<a href='customer/my_account.php?my_order'>My Account</a>";
            }



            ?>
     
          </li>
					<li><a href="../cart.php">Go to cart</a></li>
					<li><a href="../login.php">
         <?php
            if(!isset($_SESSION['customer_email'])){
              echo "<a href='login.php'>Login</a>";
            }
            else{
              echo "<a href='logout.php'>Logout</a>";
            }


            ?>
          
          </a></li>

				</ul>
				

			</div> <!-- col-md-6 2nd -->
		</div><!--  row -->
			
		</div> <!-- container enidng -->



	</div> <!-- top ending -->

	<!-- .................. top bar ending/////////////////-->

          
 <!--////////////////////// navbar starting/////////////////////// -->


 <nav class="navbar navbar-expand-md" id="navbar" style="background-color: white; height:80px;">
 	<div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php"><img  src="images/images.png" width="170" height="60" style="margin-top: -10px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation">
    <span class="navbar-toggler-icon"></span>
    <i class="fa fa-align-justify"></i>
  </button>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#search">
    <span class="navbar-toggler-icon"></span>
    <i class="fa fa-search"></i>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="navigation">
  	<div class="padding-nav">
    <ul class=" nav navbar-nav navbar-left">
      <li class="nav-item">
        <a style="color:black;" class="nav-link" href="index.php">Home</a>
      </li>
      <li style="margin-left:7px;" class="nav-item active">
        <a style="color:black;" class="nav-link" href="shop.php">Shop</a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
         <?php
             if(!isset($_SESSION['customer_email'])){
               echo "<a class='nav-link' href='checkout.php' style='color:black;'>My Account</a>";
             }
             else{
               echo "<a class='nav-link' href='customer/my_account.php?my_order' style='color:black;'>My Account</a>";
            }



            ?>
        </a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="cart.php">Shopping Cart</a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="about.php">About Us</a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="services.php">Services</a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
</div><!--  padding-nav -->
<div class="navbar-collapse colapse right">
	<button style="margin-left:100px;" class="btn btn-primary navbar-btn text-white" type="button" data-toggle="collapse" data-target="#search">
		<span class="sr-only">Toggle Search</span>
		<i class="fa fa-search"></i>
	</button>
</div><!-- navbar-collapse colapse-right End-->

<a href="cart.php" style="margin-right:20px;" class="btn navbar-btn btn-primary right text-white">
	<i class="fa fa-shopping-cart"></i>
	<span><?php echo total_items();?> items in cart</span>
	
</a>



  </div> <!-- collapsing -->


</div> <!-- container -->

</nav>

<div style="background-color:white;" >
<div class="container">
<div class="collapse clearfix" id="search" style=" padding-bottom: 10px; padding-top: 10px; border-top: 1px solid lightgreen;">
  <form class="navbar-form" method="get" action="result.php" >

  
    <div class="input-group" style="width: 300px; float: right;">
 <input type="text" name="user_query" placeholder="Search" class="form-control" required>
 	<button type="submit" value="Search" name="search" class="btn text-white" style="background-color: lightgreen;" >
        <i class="fa fa-search"></i>
      </button>
     
    </div><!-- input-group -->
  </form>
</div><!-- collapse clearfix -->
</div> <!-- container -->
</div>

<!--////////////////////// navbar ending/////////////////////// -->


	<div id="content">
<div class="container">
	
<div class="row">
	<div class="col-md-12">
		<ul class="breadcrumb" style="background-color:white; padding: 8px 15px;">
			<li><a href="home.php">Home</a></li>
			<li>Shop</li>

		</ul>
	</div> <!-- cols -->

	<div class="col-md-3">
		<?php
		 include'includes/sidebar.php';
		?>
	</div><!--  col md-3 -->



<div class="col-md-9">
	
	<?php
	if(!isset($_GET['p_cat'])){
		if(!isset($_GET['cat_id'])){
			echo "
			<div class='box'>
		<h1>Shop</h1>
		<p>Online Shopping Store you can buy online</p>
	</div> <!-- box -->
";

		}
	}



	?>





	


	<div  class="row">
		

		<?php
		if(!isset($_GET['p_cat'])){
			if(!isset($_GET['cat_id'])){
				$per_page=6;
				if(isset($_GET['page'])){
					$page=$_GET['page'];

				}else{
					$page=1;
				}
				$start_from=($page-1)*$per_page;
				$get_products="select * from products ORDER by 1 DESC LIMIT $start_from , $per_page";
				$run=mysqli_query($con,$get_products);
				while($row=mysqli_fetch_array($run)){
					$pro_id=$row['product_id'];
					$pro_title=$row['product_title'];
					$pro_price=$row['product_price'];
                     $pro_img1=$row['product_img1'];
                     echo "
                     <div class='col-md-4 col-sm-6 center-responsive'>
			<div class='product'style='width: 270px; height: 430px; box-sizing: border-box;'>
				<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='img-responsive' style='margin-left:-10px; width: 250px; height: 200px;'></a>
				<div class='text'>
					<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
					<p class='price' style='color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;'>INR $pro_price </p>
					<p class='buttons'style='margin-left: 20px; margin-top:30px;'>
						<a href='details.php?pro_id=$pro_id' class='btn btn-default'style='margin-left:-35px; margin-bottom: -20px;'>View Details</a>
						<a href='details.php?pro_id=$pro_id' class='btn btn-primary'style='margin-left:72px; margin-top: -10px;'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</p>
				</div> <!-- text -->

			</div> <!-- product -->

		</div><!--  col -->

                     ";


				}


	?>









		
	</div><!--  row -->

	<center>
		<ul class="pagination" >
  
 <?php
 $query="select * from products";
 $run=mysqli_query($con,$query);
 $total_record=mysqli_num_rows($run);
 $total_pages=ceil($total_record / $per_page);
 echo "
 <li class='page-item'><a class='page-link' href='shop.php?page=1'>".'First Page'."</a></li>

 ";
 for($i=1; $i<=$total_pages;$i++){
 	 echo "
 <li class='page-item'><a class='page-link' href='shop.php?page=".$i."'>".$i."</a></li>

 ";
 }
  echo "
 <li class='page-item'><a class='page-link' href='shop.php?page=$total_pages'>".'Last Page'."</a></li>

 ";
}
}
 ?>

</ul>

	</center>



		<?php 
getspecificpcats();
getspecificcats();

?>
</div> <!-- col9 -->

	</center>


</div> <!-- row -->
</div> <!-- container -->
</div> <!-- content -->







<!--  foorte -->
<br><br>

<?php
include'includes/footer.php';

?>
</body>
</html>



















