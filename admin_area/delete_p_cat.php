<?php
if(isset($_GET['delete_p_cat'])){
	$delete_id=$_GET['delete_p_cat'];
	$delete_p_cat="delete from  product_cateogries WHERE p_cat_id='$delete_id'";
	$run=mysqli_query($con,$delete_p_cat);
	if($run){
		echo "<script>alert('one Product cateogry has been deleted')</script>";
		echo "<script>window.open('index.php?view_product_cat','_self')</script>";
	}
}




?>