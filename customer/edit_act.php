<?php

$customer_email=$_SESSION['customer_email'];
$get_customer="select * from customers WHERE customer_email='$customer_email'";
$run=mysqli_query($con,$get_customer);
$row=mysqli_fetch_array($run);
$customer_id=$row['customer_id'];
$customer_name=$row['customer_name'];
$customer_email=$row['customer_email'];
$customer_password=$row['customer_password'];
$customer_country=$row['customer_country'];
$customer_city=$row['customer_city'];
$customer_contact_detail=$row['customer_contact_detail'];
$customer_address=$row['customer_address'];

$customer_img=$row['customer_image'];







?>
<div class="box" style="padding-bottom:80px;">
	<center>
<h1>Edit Your Account</h1>
</center>
<form action="" method="POST" enctype="multipart/form-data">
<div class="form-group">
	<label class="font-weight-bold">Customer Name:</label>
	<input type="text" name="c_name" class="form-control" value="<?php echo $customer_name; ?>" required>
</div>


<div class="form-group">
	<label class="font-weight-bold">Customer Email:</label>
	<input type="email" name="c_email" class="form-control" value="<?php echo $customer_email; ?>" required>
</div>

<div class="form-group">
	<label class="font-weight-bold">Customer Country:</label>
	<input type="text" name="c_country" class="form-control" value="<?php echo $customer_country; ?>"  required>
</div>
<div class="form-group">
	<label class="font-weight-bold">Customer City:</label>
	<input type="text" name="c_city" class="form-control" value="<?php echo $customer_city; ?>" required>
</div>
<div class="form-group">
	<label class="font-weight-bold">Contact Number:</label>
	<input type="number" name="c_number" class="form-control" value="<?php echo $customer_contact_detail; ?>" required>
</div>
<div class="form-group">
	<label class="font-weight-bold">Customer Address:</label>
	<input type="text" name="c_address" class="form-control" value="<?php echo $customer_address; ?>" required>
</div>
<div class="form-group">
	<label class="font-weight-bold">Customer image:</label>
	<input type="file" name="c_image" class="form-control" required>
	<img src="customer_images/<?php echo $customer_img;?>" class="img-responsive" width="100" height="50">
</div>
<div class="text-center">
	<button style="margin-left:250px;" class="btn btn-primary" name="update">Update Now</button>
	
</div>
</form>

</div> <!-- box -->




        <?php
        if(isset($_POST['update'])){
        	$update_id=$customer_id;
        	$c_name=$_POST['c_name'];
        	$c_email=$_POST['c_email'];
        	$c_country=$_POST['c_country'];
        	$c_city=$_POST['c_city'];
        	$c_number=$_POST['c_number'];
               $c_address=$_POST['c_address'];
               $c_img=$_FILES['c_image']['name'];
               $c_img_tmp=$_FILES['c_image']['tmp_name'];
               move_uploaded_file($c_img_tmp,'customer_images/$c_img');

               $update_customer="update customers set customer_name='$c_name', customer_email='$c_email', customer_country='$c_country', customer_city='$c_city',customer_contact_detail='$c_number',customer_address='$c_address',customer_image='$c_img' WHERE customer_id='$update_id'";
               $run=mysqli_query($con,$update_customer);
               if($run){
               	echo "<script>alert('Your details updated.')</script>";
               	
               }




        }


?>




