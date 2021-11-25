
<?php

if(isset($_GET['delete_payment'])){
	$delete_id=$_GET['delete_payment'];
	$delete_p_cat="delete from payments WHERE payment_id='$delete_id'";
	$run=mysqli_query($con,$delete_p_cat);
	if($run){
		echo "<script>alert('one order has been deleted')</script>";
		echo "<script>window.open('index.php?view_payments','_self')</script>";
	}
}




?>
?>