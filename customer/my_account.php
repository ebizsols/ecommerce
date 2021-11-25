
<?php
session_start();
if(!isset($_SESSION['customer_email'])){
  echo "<script>window.open('../checkout.php','_self')</script>";
}
else{


include'includes/db.php';
include'../functions/function.php';



?>



<!DOCTYPE html>
<html>
<head>
	<title>My account.php</title>

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
				<a href="#">Shopping Cart Total Price: INR <?php total_price();?>, Total Items <?php total_items();?></a>
				
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
  <a class="navbar-brand" href="../index.php"><img  src="images/images.png" width="170" height="60" style="margin-top: -10px;"></a>

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
        <a style="color:black;" class="nav-link" href="../index.php">Home</a>
      </li>
      <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="../shop.php">Shop</a>
      </li>
      <li style="margin-left:7px;" class="nav-item active">
        <a style="color:black;" class="nav-link" href="my_account.php">My Account</a>
      </li>
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="../cart.php">Shopping Cart</a>
      </li>
       
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="../contact.php">Contact Us</a>
      </li>
    </ul>
</div><!--  padding-nav -->
<div class="navbar-collapse colLapse right">
  <button style="margin-left:150px;" class="btn btn-primary navbar-btn text-white" type="button" data-toggle="collapse" data-target="#search">
    <i class="fa fa-search"></i>
  
    
  </button>
</div><!-- navbar-collapse colapse-right End-->

<a href="cart.php" style="margin-right:20px;" class="btn navbar-btn btn-primary right text-white">
	<i class="fa fa-shopping-cart"></i>
  <span>  <?php total_items();?> items in cart</span>
	
	
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
			<li>My Account</li>

		</ul>
	</div> <!-- cols -->
</div> <!-- row -->
<div class="row">

	<div class="col-md-3">
		<?php
		 include'includes/sidebar.php';
		?>
	</div><!--  col md-3 -->
  <div class="col-md-9">
    <?php
if(isset($_GET['my_order'])){
  include'my_order.php';
}

    ?>

<!-- /////////////////////////Includinmg payoffline page/////////////////////// -->
           <?php

if(isset($_GET['pay_offline'])){
  include'pay_offline.php';
}
?>

<!-- /////////////////////////Including edit account e page/////////////////////// -->

<?php

if(isset($_GET['edit_act'])){
  include'edit_act.php';
}

?>
<!-- /////////////////////////Including change password page/////////////////////// -->

<?php
if(isset($_GET['chang_pass'])){
  include'change_password.php';
}

?>
<!-- /////////////////////////Including delet account page/////////////////////// -->

<?php
if(isset($_GET['delete_act'])){
  include'delete_act.php';
}

?>


  </div><!--  col 9 -->
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


<?php
}
?>










