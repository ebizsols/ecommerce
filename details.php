<?php
session_start();
include'includes/db.php';
include'functions/function.php';
?>
<?php
if(isset($_GET['pro_id'])){
	$pro_id=$_GET['pro_id'];
	$query="select * from products WHERE product_id='$pro_id'";
	$run_pro=mysqli_query($con,$query);
	$row_pro=mysqli_fetch_array($run_pro);
	$p_cat_id=$row_pro['p_cat_id'];
	$p_title=$row_pro['product_title'];
	$p_price=$row_pro['product_price'];
	$p_desc=$row_pro['product_desc'];
    $p_img1=$row_pro['product_img1'];
    $p_img2=$row_pro['product_img2'];
    $p_img3=$row_pro['product_img3'];

    $get_p_cat="select * from product_cateogries WHERE p_cat_id='$p_cat_id='";
    $run_p_cat=mysqli_query($con,$get_p_cat);
    $row_p_cat=mysqli_fetch_array($run_p_cat);


    $p_cat_id=$row_p_cat['p_cat_id'];
    $p_cat_title=$row_p_cat['p_cat_title'];
    $p_cat_desc=$row_p_cat['p_cat_desc'];





}



?>
<!DOCTYPE html>
<html>
<head>
	<title>details.php</title>

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
				<a href="#">Shopping Cart Total Price: PKR<?php echo total_price();?>, Total Items <?php echo total_items();?></a>
				
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
					<li><a href="login.php">
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

			<li><a href="shop.php?p_cat=<?php echo $p_cat_id?>"><?php echo $p_cat_title?></a></li>
			<li><?php echo $p_title;?></li>

		</ul>
	</div> <!-- cols -->

	<div class="col-md-3">
		<?php
		 include'includes/sidebar.php';
		?>
	</div><!--  col md-3 -->

<div class="col-md-9">
	
<div class="row" id="productmain">
	<div class="col-sm-6">
<div id="mainimage">
	<div id="mycarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<center>
      <img src="admin_area/product_images/<?php echo $p_img1?>" alt="Los Angeles" style="width: 300px; height:600px;">
  </center>
    </div>

    <div class="carousel-item">
    	<center>
      <img src="admin_area/product_images/<?php echo $p_img3?>" alt="Chicago" style="width: 300px; height:600px;" classs='img-responsive'>
  </center>
    </div>
    <div class="carousel-item">
    	<center>
      <img src="admin_area/product_images/<?php echo $p_img2?>" alt="New York" style="width: 300px; height:600px;">
  </center>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#mycarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>

  </a>
  <a class="carousel-control-next" href="#mycarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div> <!-- mainimg -->
		


	</div> <!-- col 1st sm 6 -->

	<div class="col-sm-6">
		<div class="box">
			<h3 class="text-center"><?php echo $p_title;?></h3>
			<?php add_cart();?>
			<form method="post" action="details.php?add_cart=<?php echo $pro_id?>" class="form-horizontal">
				<div class="form-group">
					<div class="row">
					<label class="col-md-5 control-label font-weight-bold"> Product Quantity:</label>
					<div class="col-md-7">
						<select name="product_qty" class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div> <!-- md7 -->
				</div> <!-- row -->
				</div><!--  group -->
				<div class="form-group">
					<div class="row">
					<label class="col-md-5 control-label font-weight-bold">Product size:</label>
					<div class="col-md-7">
						<select name="product_size" class="form-control">
							<option>Select a size</option>
							<option>Small</option>
							<option>Medium</option>
							<option>Large</option>
							<option>Extra Large</option>
						</select>
					</div> <!-- col7 -->
				</div> <!-- row -->
				</div> <!-- form group -->
				<div class="form-group">
					<div class="row">
					<label class="col-md-5 control-label font-weight-bold">Product Color:</label>
					<div class="col-md-7">
						<select name="product_color" class="form-control">
							<option>Select a color</option>
							<option>Blue</option>
							<option>Red</option>
							<option>Skyblue</option>
							<option>Green</option>
						</select>
					</div> <!-- col7 -->
				</div> <!-- row -->
				</div> <!-- form group -->
              <p class="price"style="color:lightgreen; font-size: 30px !important;text-align: center !important;font-weight: 300; margin-top: 40px;">PKR <?php echo $p_price?></p>
             
              <p class="text-center buttons pb-5">
              	<button class="btn btn-primary " style="margin-left:50px;" type="submit"><i class="fa fa-shopping-cart">Add to card</i></button>
              </p>



			</form>

		</div> <!-- box -->
		
<div class="row">
		<div class="col-xs-4" style="margin-left:50px;">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img1?>" class="img-responsive" width="100" height="150" style="margin:12px; ">
				
			</a>
		</div> <!-- xs -->
		<div class="col-xs-4">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img1?>" class="img-responsive"width="100" height="150" style="margin:12px" >
				
			</a>
		</div> <!-- xs -->
		<div class="col-xs-4">
			<a href="#" class="thumb">
				<img src="admin_area/product_images/<?php echo $p_img1?>" class="img-responsive"width="100" height="150"style="margin:12px" >
				
			</a>
		</div> <!-- xs -->
	</div> <!-- row -->

	</div> <!-- col-sm-6 -->
</div><!--  row -->
<div class="box" id="details">
	<h4>Product Details</h4>
	<p> <?php echo $p_desc?></p>
	<h4>Size</h4>
	<ul>
		<li>Small</li>
		<li>Medium</li>
		<li>Large</li>
		<li>Extra Large</li>
	</ul>
</div> <!-- box -->




	<div class="row">
		<?php
		$get_pro="select * from products ORDER By 1 LIMIT 0,8";
		$run=mysqli_query($con,$get_pro);
		while($row=mysqli_fetch_array($run)){
			$pro_id=$row['product_id'];
			$pro_title=$row['product_title'];
			$pro_price=$row['product_price'];
			$pro_img1=$row['product_img1'];
			echo "
			<div class=' col-md-4 center-responsive'>
		<div class='product same-height' style='height:400px; width:250px;>
			<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='img-responsive' width='150' style='margin-left: -10px;'></a>
			<div class='text'>
				<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
				<p class='price' style='color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;'>PKR $pro_price</p>
			</div><!--  text -->
		</div><!-- product same-height -->
		
	</div><!-- center-responsive -->

			";
			


		}




		?>











	
	
</div> <!-- row  -->



</div><!-- row same-height-row -->

</div><!-- col md -9 -->







	</div> <!-- container -->
</div> <!-- content -->




<br><br>
<?php
include'includes/footer.php';

?>

</body>
</html>