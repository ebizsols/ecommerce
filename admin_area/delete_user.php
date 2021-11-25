<?php

if(isset($_GET['delete_user'])){
	$delete_id=$_GET['delete_user'];
	$delete_admin="delete from admins WHERE admin_id='$delete_id'";
	$run=mysqli_query($con,$delete_admin);
	if($run){
		echo "<script>alert('one admin has been deleted')</script>";
		echo "<script>window.open('index.php?view_user','_self')</script>";
	}
}




?>
?>