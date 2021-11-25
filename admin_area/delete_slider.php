

<?php

if(isset($_GET['delete_slider'])){
	$delete_id=$_GET['delete_slider'];
	$delete_slider="delete from slider WHERE Id='$delete_id'";
	$run=mysqli_query($con,$delete_slider);
	if($run){
		echo "<script>alert('one Slider has been deleted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}
}




?>
?>