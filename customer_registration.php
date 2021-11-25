<?php
session_start();
include'includes/db.php';
include'functions/function.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer_registration.php</title>

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
				<a href="#" class="btn btn-success btn-sm"> <?php
                 if(!isset($_SESSION['customer_email'])){
                 echo"Welcome Guest"; 
                 }
                 else{
                 	 echo"Welcome:".$_SESSION['customer_email']."";

                 }

				?>
					
				</a>

				 
				<a href="#">Shopping Cart Total Price: INR 100, Total Items 2</a>


				
			</div> <!-- col md-6 -->

			<div class="col-md-6 ">
				<ul class="menu">
					<li><a href="customer_registration.php">Register</a></li>
					<li><a href="checkout.php">
						 <?php
             if(!isset($_SESSION['customer_email'])){
               echo "<a href='checkout.php'>My Account</a>";
             }
             else{
               echo "<a href='customer/my_account.php?my_order'>My Account</a>";
             }



            ?>
					</a></li>
					<li><a href="cart.php">Go to cart</a></li>
					<li>						
						<?php
						if(!isset($_SESSION['customer_email'])){
							echo "<a href='login.php'>Login</a>";
						}
						else{
							echo "<a href='logout.php'>Logout</a>";
						}


						?>





					</li>

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
      <li class="nav-item active">
        <a style="color:black;" class="nav-link" href="index.php">Home</a>
      </li>
      <li style="margin-left:7px;" class="nav-item ">
        <a style="color:black;" class="nav-link" href="shop.php">Shop</a>
      </li>
      <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="checkout.php">
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
	<span>4 items in cart</span>
	
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
			<li>Registration</li>

		</ul>
	</div> <!-- cols -->

	
<div class="col-md-3">
		<?php
		 include'includes/sidebar.php';
		?>
	</div><!--  col md-3 -->

	<div class="col-md-9">
		
<div class="box" style="padding-bottom: 60px;">
	<div class="box-header">
		<center>
			<h2>Customer Registration</h2>
			
		</center>
	</div> <!-- box header -->
	<form action="customer_registration.php" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<label> Customer Name</label>
			<input type="text" class="form-control" name="c_name" required>
		</div> <!-- form group -->

		<div class="form-group">
			<label> Customer E-mail</label>
			<input type="email" class="form-control" name="c_email" required>
		</div> <!-- group -->
		<div class="form-group">
			<label>Customer password</label>
			<input type="password" class="form-control" name="c_password" required>
		</div> <!-- grop -->
		<div class="form-group">
			<label>Customer country</label>
			<input type="text" class="form-control" name="c_country" required>
		</div> <!-- grop -->
		<div class="form-group">
			<label>City</label>
			<input type="text" class="form-control" name="c_city" required>
		</div> <!-- grop -->
		<div class="form-group">
			<label>Contact Number</label>
			<input type="number" class="form-control" name="c_number" required>
		</div> <!-- grop -->
		<div class="form-group">
			<label>Customer Address</label>
			<input type="text" class="form-control" name="c_address" required>
		</div> <!-- grop -->
		<div class="form-group">
			<label>Customer Image</label>
			<input type="file" class="form-control" name="c_img" required>
		</div> <!-- grop -->
		
		
		
		
		<div class="text-center">
<button  style="margin-left:300px; margin-top: 7px;" type="submit"  name="submit" class="btn btn-primary text-center"><i style="margin-right: 10px; font-weight: bold;" class="fa fa-user-md "></i>Register</button>
			

		</div><!--   text centerb -->

	</form>
</div><!--  box -->
	</div> <!-- col md-9 -->
</div> <!-- container -->
</div> <!-- content -->
<!-- ///////////////////footer page  includng////////////////////// -->


 <?php
include'includes/footer.php';
 ?>

</body>
</html>
     <?php
     if(isset($_POST['submit'])){
     	$customer_name=$_POST['c_name'];
     	$customer_email=$_POST['c_email'];
     	$customer_password=$_POST['c_password'];
     	$customer_country=$_POST['c_country'];
     	$customer_city=$_POST['c_city'];
     	$customer_number=$_POST['c_number'];
     	$customer_address=$_POST['c_address'];
     	$customer_img_name=$_FILES['c_img']['name'];
     	$customer_img_tmp=$_FILES['c_img']['tmp_name'];
     	$c_ip= getRealIpAddr();;
     	move_uploaded_file($customer_img_tmp,"customer/customer_images/$customer_img_name");

     	$insert="insert into customers(customer_name,customer_email,customer_password,customer_country,customer_city,customer_contact_detail,customer_address,customer_image,customer_ip)values('$customer_name','$customer_email','$customer_password','$customer_country','$customer_city','$customer_number','$customer_address','$customer_img_name','$c_ip')";
     	$run=mysqli_query($con,$insert);
     	
     	$select_cart="select * from cart WHERE ip_address='$c_ip'";
     	$run=mysqli_query($con,$select_cart);
     	$check_cart=mysqli_num_rows($run);
     	if($check_cart>0){
     		$_SESSION['customer_email']=$customer_email;
     		echo "<script>alert('You have been registered successfully')</script>";
     		echo "<script>window.open('checkout.php','_self')</script>";
     	}
     	else{
     		$_SESSION['customer_email']=$customer_email;
     		echo "<script>alert('You have been registered successfully')</script>";
     		echo "<script>window.open('index.php','_self')</script>";

     	}


     	
     }



?>






