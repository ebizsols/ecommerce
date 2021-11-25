<?php
if(isset($_GET['delete_product'])){
	$detel_id=$_GET['delete_product'];
	$delete_pro="delete from products WHERE product_id='$detel_id'";
	$run=mysqli_query($con,$delete_pro);
	if($run){
		echo "<script>alert('One Product Has been Deleted')</script>";
		echo "<script>window.open('index.php?view_product','_self')</script>";

	}
}






?>