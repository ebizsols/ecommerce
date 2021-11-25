<?php

if(isset($_GET['delete_cat'])){
	$delete_id=$_GET['delete_cat'];
	$delete_p_cat="delete from cateogries WHERE cat_id='$delete_id'";
	$run=mysqli_query($con,$delete_p_cat);
	if($run){
		echo "<script>alert('one cateogry has been deleted')</script>";
		echo "<script>window.open('index.php?view_cateogry','_self')</script>";
	}
}




?>
?>