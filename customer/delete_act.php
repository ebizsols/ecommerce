
<div class="box" style="padding-bottom: 30px;">
	<center>
	<h3>Do you really want to delete your account</h3>
</center>

<center>
	<div style="margin-top: 30px;">
	<form action="" method="POST">
	<input  type="submit" style="margin-right: 150px;" name="yes" value="Yes, I want to Delete" class="btn btn-danger">
	<input style="margin-left: 150px;"  type="submit" name="no" value="No , I Don't want" class="btn btn-primary">
	
	
</form>
</div>
</center>
</div>
        <?php
        $customer_email=$_SESSION['customer_email'];
        if(isset($_POST['yes'])){
        	$delete="delete from customers WHERE customer_email='$customer_email'";
        	$run=mysqli_query($con,$delete);
        	if($run){
        		session_destroy();
        		echo "<script>alert('Your account has been deleted')</script>";
        		echo "<script>window.open('../index.php','_self')</script>";


        	}

        }


?>