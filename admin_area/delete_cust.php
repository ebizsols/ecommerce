
<?php

if(isset($_GET['delete_cust'])){
	$delete_id=$_GET['delete_cust'];
	$delete_p_cat="delete from customers WHERE customer_id='$delete_id'";
	$run=mysqli_query($con,$delete_p_cat);
	if($run){
		echo "<script>alert('one customer has been deleted')</script>";
		echo "<script>window.open('index.php?view_customer','_self')</script>";
	}
}




?>
