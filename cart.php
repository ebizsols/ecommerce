<?php
session_start();
include'includes/db.php';
include'functions/function.php';



?>

<!DOCTYPE html>
<html>
<head>
	<title>Cart.php</title>

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
				<a href="#">Shopping Cart Total Price: INR <?php total_price()?>, Total Items <?php total_items();?></a>
				
			</div> <!-- col md-6 -->

			<div class="col-md-6 ">
				<ul class="menu">
					<li><a href="customer_registration.php">Register</a></li>
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
 <li><a href="cart.php">Go to cart</a></li>
 <li>  <?php
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
		</div>  <!-- row -->
			
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
      <li style="margin-left:7px;" class="nav-item ">
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
       <li style="margin-left:7px;" class="nav-item active">
        <a style="color:black;" class="nav-link" href="cart.php">Shopping Cart</a>
      </li>
       
       <li style="margin-left:7px;" class="nav-item">
        <a style="color:black;" class="nav-link" href="contactus.php">Contact Us</a>
      </li>
    </ul>
</div><!--  padding-nav -->
<div class="navbar-collapse colapse right">
	<button style="margin-left:240px;" class="btn btn-primary navbar-btn text-white" type="button" data-toggle="collapse" data-target="#search">
		<span class="sr-only">Toggle Search</span>
		<i class="fa fa-search"></i>
	</button>
</div><!-- navbar-collapse colapse-right End-->

<a href="cart.php" style="margin-right:20px;" class="btn navbar-btn btn-primary right text-white">
	<i class="fa fa-shopping-cart"></i>
	<span><?php total_items();?>items in cart</span>
	
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
			<li>Cart</li>

		</ul>
	</div> <!-- cols -->

	<div class="col-md-9" id="cart">
		
<div class="box" style="padding-bottom:100px;

">
	<form action="cart.php" method="post" enctype="multipart-form-data">
		<h1>Shopping cart</h1>
		<?php
$ip_add=getRealIpAddr();
      $select="select * from cart WHERE ip_address='$ip_add'";
      $run=mysqli_query($con,$select);
      $count=mysqli_num_rows($run);
		?>
       

		<p class="text-muted"> Currently You have <?php echo $count;?> item(s) in your cart </p>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						
					<th colspan="2">Product</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Size</th>
					<th colspan="1">Delete</th>
					<th colspan="1">Sub Total</th>
				</tr>
				</thead>
				<tbody>
					

					<?php
					// //////////shopping cart /////////////////
					
					$ip=getRealIpAddr();
  $total= 0;
  $select="select * from cart where ip_address='$ip'";
  $conn= mysqli_query($con,$select);
  
  while($row=mysqli_fetch_array($conn)){
    $p_id= $row['p_id'];
    $qty=$row['Quantity'];
    $size=$row['size'];
    $pro= "select * from products where product_id=' $p_id'";
    $run= mysqli_query($con,$pro);
   
    while($row=mysqli_fetch_array($run)){
      $title= $row['product_title'];
      $img= $row['product_img1'];
     $price=$row['product_price'];
      $pri= array($row['product_price']);
      $value= array_sum($pri)* $qty;
      $total+=$value;
  ?>
  <tr>
                        
						<td><img src="admin_area/product_images/<?php echo $img;?>" width="50"></td>
						<td><?php echo  $title; ?></td>
						<td><?php echo $qty; ?></td>
						<td>PKR <?php echo  $price; ?></td>
						<td><?php echo $size;?></td>
						<td><input type="checkbox" name="remove[]" value="<?php echo $p_id;?>"></td>
						<td>PKR <?php echo $value; ?></td>
					</tr>
					
						<?php
					}
					}


					?>
					
					
				</tbody>

				<tfoot>
					<tr>
						<th colspan="5">Total</th>
						<th colspan="2">PKR <?php echo $total;?></th>
					</tr>
				</tfoot>
			</table>
		</div> <!-- table  responsive-->

		<div class="box-footer">
			<div class="pull-left">
				<a href="index.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i>Continue Shopping</a>
			</div> <!-- left -->
			<div class="pull-right">
				<button class="btn btn-primary mr-2" type="submit" name="update" value="Update cart"><i class="fa fa-refresh"></i>Update cart</button>

				<a href="checkout.php" class="btn btn-primary">Proceedd to checkout <i class="fa fa-chevron-right"></i></a>
			</div> <!-- <a
		 -->
		</div> <!-- box footer -->
	</form>



	
	  <?php 
function updatecart(){
  global $con;
if(isset($_POST['update'])){
  foreach(['remove'] as $remove_id){
    $delete= "delete from cart WHERE p_id='$remove_id'";
    $run= mysqli_query($con, $delete);
    if($run){
      echo "<script>window.open('cart.php','_self')</script>";
    }

  }


}
 
}
 echo @$up_cart = updatecart();

?>

</div><!--  box -->

       


 








     
		
<div class="row">
	<div class="col-md-3">
		<div class="box same-height headline">
			<h3 class="text-center">You Also Like These Products</h3>
			
		</div> <!-- box same-height headline -->
	</div>
	<div class=" col-md-3 center-responsive">

		<div class="product same-height" >
			<a href=""><img src="admin_area/product_images/images (4).jpg" class="img-responsive" width="150" style="margin-left: -10px;"></a>
			<div class="text">
				<h4><a href="details.php">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</a></h4>
				<p class="price" style="color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;">PKR <?php echo $total;?></p>
			</div><!--  text -->
		</div><!-- product same-height -->
		
	</div><!-- center-responsive -->
	<div class=" col-md-3 center-responsive">
		<div class="product same-height" >
			<a href=""><img src="admin_area/product_images/images (4).jpg" class="img-responsive" width="150" style="margin-left: -10px;"></a>
			<div class="text">
				<h4><a href="details.php">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</a></h4>
				<p class="price" style="color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;">PKR 199</p>
			</div><!--  text -->
		</div><!-- product same-height -->
		
	</div><!-- center-responsive -->

	<div class=" col-md-3 center-responsive">
		<div class="product same-height" >
			<a href=""><img src="admin_area/product_images/images (4).jpg" class="img-responsive" width="150" style="margin-left: -10px;"></a>
			<div class="text">
				<h4><a href="details.php">Mardaz Pack of 5 - Multicolor Cotton V-Neck T-Shirts For Men</a></h4>
				<p class="price" style="color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;">PKR 199</p>
			</div><!--  text -->
		</div><!-- product same-height -->
		
	</div><!-- center-responsive -->

</div> <!-- row  -->



</div><!-- row same-height-row -->

<div class="col-md-3">
     	
      <div class="box" id="order-summary">
      	<div class="box-header">
      		<h4>Order Summary</h4>
      	</div> <!-- box haere -->
      	<p class="text-muted">
      		Shipping and additional  costs are calculated based  on the values you have entered 
      	</p>
      	<div class="table-responsive">
      	<table class="table">
      		<tbody>
      			<tr>
      				<th>Order subtotal</th>
      				<th>PKR&nbsp;<?php echo $total;?></th>

      			</tr>
      			<tr>
      				<td class="text-muted">Shipping and handling</td>
      				<td>PKR 0</td>
      			</tr>
      			<tr>
      				<td class="text-muted">Tax</td>
      				<td>PKR 0</td>
      			</tr>
      			<tr class="total" >
      				<td class="font-weight-bold">Total</td>
      				<th>PKR&nbsp;<?php echo $total;?></th>
      			</tr>
      		</tbody>
      		
      	</table>
      </div> <!-- table responsive -->
      </div> <!-- order summry -->
     </div> <!-- col md 3 -->


	</div> <!-- container -->
</div> <!-- content -->

	</div><!-- <div  col md-9-->

     


 <!-- ///////////////////////////fooeth///////////////////// -->
 <?php
include'includes/footer.php';
 ?>
</body>
</html>















