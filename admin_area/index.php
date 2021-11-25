<?php
session_start();
include'includes/db.php';
if(!isset($_SESSION['admin_email'])){
	echo"<script>window
	.open('login.php','_self')</script>";
}
else{

?>
   <?php
   $admin_session=$_SESSION['admin_email'];
   $get_admin="select * from admins where admin_email='$admin_session'";
   $run=mysqli_query($con, $get_admin);
   $row= mysqli_fetch_array($run);
   $admin_id=$row['admin_id'];
   $admin_name=$row['admin_name'];
   $admin_email=$row['admin_email'];
   $admin_country=$row['admin_country'];
   $admin_contact=$row['admin_contact'];
   $admin_job=$row['admin_job'];
   $admin_about=$row['admin_about'];
    $admin_image=$row['admin_image'];


   $get_pro="select * from products";
   $run_pro=mysqli_query($con,$get_pro);
   $count_pro=mysqli_num_rows($run_pro);


   $get_cust="select * from customers";
   $run_cust=mysqli_query($con, $get_cust);
   $count_cus= mysqli_num_rows($run_cust);


   $pro_cat="select * from product_cateogries";
   $run_pro_cat=mysqli_query($con,$pro_cat);
   $count_pro_cat=mysqli_num_rows($run_pro_cat);


 $cust_order="select * from customer_order";
   $run_cust_order=mysqli_query($con,$cust_order);
   $count_cust_order=mysqli_num_rows($run_cust_order);











?>








<!DOCTYPE html>

<html>
<head>
	<title>Admin Panel</title>

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<div id="wrapper">
	<?php
	include'includes/sidebar.php';


	?>

	<div id="page-wrapper">
		
		<div class="container" style="margin-left:210px;">
			 <?php
			 if(isset($_GET['dashboard'])){
			 	include'dashboard.php';
			}
if(isset($_GET['insert_product'])){
        include'insert_product.php';
      }
      if(isset($_GET['view_product'])){
        include'view_product.php';
      }
       if(isset($_GET['delete_product'])){
        include'delete_product.php';
      }

 if(isset($_GET['edit_product'])){
        include'edit_product.php';
      }

       if(isset($_GET['insert_product_catt'])){
        include'insert_product_catt.php';
      }


       if(isset($_GET['view_product_cat'])){
        include'view_product_cat.php';
      }

       if(isset($_GET['delete_p_cat'])){
        include'delete_p_cat.php';
      }

       if(isset($_GET['edit_p_cat'])){
        include'edit_p_cat.php';
      }
       if(isset($_GET['insert_cateogry'])){
        include'insert_cateogry.php';
      }
       if(isset($_GET['view_cateogry'])){
        include'view_cateogry.php';
      }

       if(isset($_GET['delete_cat'])){
        include'delete_cat.php';
      }

        if(isset($_GET['edit_cat'])){
        include'edit_cat.php';
      }

       if(isset($_GET['insert_slider'])){
        include'insert_slider.php';
      }

        if(isset($_GET['view_slider'])){

        include'view_slider.php';
      }

       if(isset($_GET['delete_slider'])){
        include'delete_slider.php';
      }

       if(isset($_GET['edit_slider'])){
        include'edit_slider.php';
      }

if(isset($_GET['view_customer'])){
        include'view_customer.php';
      }

      if(isset($_GET['delete_cust'])){
        include'delete_cust.php';
      }

       if(isset($_GET['view_order'])){
        include'view_order.php';
      }


       if(isset($_GET['delete_order'])){
        include'delete_order.php';
      }

       if(isset($_GET['view_payments'])){

        include'view_payments.php';
      }


 if(isset($_GET['delete_payment'])){

        include'delete_payment.php';
      }
   if(isset($_GET['insert_user'])){

        include'insert_user.php';
      }

       if(isset($_GET['view_user'])){

        include'view_user.php';
      }


       if(isset($_GET['delete_user'])){

        include'delete_user.php';
      }


        if(isset($_GET['user_profile'])){

        include'user_profile.php';
      }

       if(isset($_GET['insert_box'])){

        include'insert_box.php';
      }














      
			?> 
			

		</div><!--  container fluid -->
	</div> <!-- page wrapper -->
	

</div> <!-- wrapper -->



</body>
</html>

<?php
}

?> 










