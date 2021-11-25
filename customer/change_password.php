<?php?>

<div class="box" style="padding-bottom: 100px">
	<center>
		<h3>Change Your Password</h3>
	</center>
	<form action="" method="POST">
	<div class="form-group">
		<label style="font-weight: bold;">Enter Your Current Password</label>
		<input type="password" name="old_password" class="form-control">
	</div> <!-- fom group -->
	<div class="form-group">
		<label style="font-weight: bold;">Enter New Paaword</label>
		<input type="password" name="new_password" class="form-control">
	</div> <!-- fom group -->

	<div class="form-group">
		<label style="font-weight: bold;">Confirm New Password</label>
		<input type="password" name="cnfrm_password" class="form-control">
	</div> <!-- fom group -->

	<div class="text-center">
		<button style="margin-left:220px; margin-top: 20px;" class="btn btn-primary btn-lg" name="update" type="submit">Update Now</button>
	</div>
</form>
	
</div><!--  box -->
       <?php
       if(isset($_POST['update'])){
       	$c_email=$_SESSION['customer_email'];
       	$old_pass=$_POST['old_password'];
       	$new_pass=$_POST['new_password'];
       	$cnfrm_new_pass=$_POST['cnfrm_password'];

       	$select="select * from customers WHERE customer_email='$c_email' AND customer_password='$old_pass'";
       	$run=mysqli_query($con,	$select);
       	$check_old_pass=mysqli_num_rows($run);
     

       	if($check_old_pass==0){
       		echo "<script>alert('Your current password is not valid...Try gaian')</script>";
       		exit();
       	}
       	
       		if($new_pass!=$cnfrm_new_pass){
       			echo "<script>alert('Your new password does't match with your Confirm password)</script>";
       		exit();

       		}
       		
       		$update="update customers set customer_password='$new_pass' WHERE customer_email='$c_email'";
       		$run=mysqli_query($con,$update);
       		
       		echo "<script>alert('Your password changed)</script>";
       		echo "<script>window.open('my_account.php?my_order')</script>";
       		exit();


       	





       }



?>