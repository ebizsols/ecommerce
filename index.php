<?php
 session_start();
include'includes/db.php';
include'functions/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Old-stuff</title>

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
				<a href="#" class="btn btn-success btn-sm" style="text-transform: lowercase;"> 
          <?php
                 if(!isset($_SESSION['customer_email'])){
                 echo"Welcome"; 
                 }
                 else{
                   echo"Welcome&nbsp;".$_SESSION['customer_email']."";

                 }

        ?>     
          </a>
      <a href="#">Shopping Cart Total Price: PKR <?php echo total_price();?>, Total Items <?php echo total_items();?></a>
				
			</div> <!-- col md-6 -->

			<div class="col-md-6 ">
				<ul class="menu">
					<li><a href="customer_registration.php">Register</a></li>
					<li><a href="customer/my_account.php">
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
  <a class="navbar-brand" href="index.php"><h3 class="font-weight-bold" style="font-style: italic;word-spacing:3px;">New-Stuff</h3></a>

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
      <li style="margin-left:7px;" class="nav-item">
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
        <a style="color:black;" class="nav-link" href="contactus.php">Contact Us</a>
      </li>
    </ul>
</div><!--  padding-nav -->
<div class="navbar-collapse colapse right">
	<button style="margin-left:150px;" class="btn btn-primary navbar-btn text-white" type="button" data-toggle="collapse" data-target="#search">
		<span class="sr-only">Toggle Search</span>
		<i class="fa fa-search"></i>
	</button>
</div><!-- navbar-collapse colapse-right End-->

<a href="cart.php" style="margin-right:20px;" class="btn navbar-btn btn-primary right text-white">
	<i class="fa fa-shoppin ag-cart"></i>
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


<br><br>
 
<!-- '''''''''''''''''''''''''''''''slider is here starting ''''''''''''''''''''''''''-->
<div class="container" id="slider">
	<div class="col-md-12">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->


  <div class="carousel-inner" style="height:500px; background-size:cover;">
  	<?php
  	$get_slider="select * from slider LIMIT 0,1";
  	$run_slider=mysqli_query($con,$get_slider);
  	while($row_slider=mysqli_fetch_array($run_slider)){
          $slider_name=$row_slider['slider_name'];
          $slider_image=$row_slider['slider_image'];
          $slider_url=$row_slider['slider_url'];


  		echo "
       <div class='carousel-item active'>
         <a href='$slider_url'> <img src='admin_area/slider_images/$slider_image' width='100%' alt='Los Angeles'></a>
           </div>
           ";

  	}
?>
<?php
  	$get_slider="select * from slider LIMIT 1,3";
  	$run_slider=mysqli_query($con,$get_slider);
  	while($row_slider=mysqli_fetch_array($run_slider)){
          $slider_name=$row_slider['slider_name'];
          $slider_image=$row_slider['slider_image'];
          $slider_url=$row_slider['slider_url'];


  		echo "
       <div class='carousel-item'>
          <a href=' $slider_url'><img src='admin_area/slider_images/$slider_image' width='100%' alt='Los Angeles'></a>
           </div>
           ";
       }
?>

</div><!-- carousel-inner -->

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
   
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    
  </a>

</div>
</div> <!-- col md 12 -->
</div><!--  container -->
<br>

  <!-- ////////////////////////////////////// boxes is here//////////////////////////  -->

<div id="advantages">
<div class="container">
	<div class="row same-height">

       <?php
       $select="select * from boxes_sec";
       $run=mysqli_query($con,$select);
       while($fetch=mysqli_fetch_array( $run)){
       $box_id=$fetch['box-id'];

       $title=$fetch['box_title'];
       $desc=$fetch['box_desc'];
       ?>
  <div class="col-sm-4">
      <div class="box same-height">
        <div class="icon"><i class="fa fa-heart"></i></div><!-- icon -->
        <h4><a href="#"><?php echo  $title;?></a></h4>
        <p><?php echo  $desc;?></p></div> <!-- box1 -->
    </div> <!-- col -->
        
       <?php
     }




         ?>





	

				
			
		

	</div><!--  rw -->

</div> <!-- container -->
	

</div><!--  advantages -->

 <!--//////////////////////////// lstest box////////////////// -->


<div id="hotbox">
	<div class="box">
		<div class="container">
			<div class="col-md-12">
				<h2>Latest this week</h2>
			</div>	 <!-- colmd -->
			
		</div> <!-- container -->
	</div><!--  box -->
</div><!--  hotbox -->


 <!--/////////////////// Now  products/////////////////// -->

<div id="content" class="container">
<div class="row">

	<?php get_all_products();?>
</div> <!-- row -->

	</div> <!-- container -->
</div><!--  content -->



 <!-- footer page  includng -->


 <?php
include'includes/footer.php';
 ?>

</body>
</html>










