<?php?>
<?php

if(isset($_GET['delete_order'])){
	$delete_id=$_GET['delete_order'];
	$delete_p_cat="delete from customer_order WHERE order_id='$delete_id'";
	$run=mysqli_query($con,$delete_p_cat);
	if($run){
		echo "<script>alert('one order has been deleted')</script>";
		echo "<script>window.open('index.php?view_order','_self')</script>";
	}
}




?>
?>