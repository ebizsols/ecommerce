<?php
session_start();
include'includes/db.php';
include'functions/function.php';

if(isset($_GET['c_id'])){
	$customer_id=$_GET['c_id'];
	$status="pending";
	$invoice_no =mt_rand();
	$ip= getRealIpAddr();
	$select="select * from cart WHERE ip_address='$ip'";
	$run=mysqli_query($con,$select);
	while($row=mysqli_fetch_array($run)){
		$pro_id=$row['p_id'];
		$qty=$row['Quantity'];
		$size=$row['size'];

		$select="select * from products WHERE product_id='$pro_id'";
		$run=mysqli_query($con,$select);
		while($row_pro=mysqli_fetch_array($run)){
			$sub_total=$row_pro['product_price'] * $qty;

			 $insert_into_cust_order="insert into customer_order(customer_id, product_id,due_amount,invoice_no,Quantity,size,order_date,order_status)values('$customer_id','$pro_id','$sub_total','$invoice_no','$qty','$size',NOW(),'$status')";
			  $run_pen=mysqli_query($con, $insert_into_cust_order);

			 
		}




 $insert_into_pending_order="insert into pending_order(customer_id,invoice_no,product_id,Quantity,size,order_status)values('$customer_id','$invoice_no','$pro_id','$qty','$size','$status')";
			  $run_pending=mysqli_query($con, $insert_into_pending_order);

			  $delete_cart="delete from cart WHERE ip_address='$ip'";
			  $run=mysqli_query($con,$delete_cart);
			  echo "<script>alert('Your order has been submitted,Thanks')</script>";
			  echo "<script>window.open('customer/my_account.php?my_order','_self')</script>";

			



		}

	}






?>







