
<?php
if(isset($_GET['user_profile'])){
	$edit_user=$_GET['user_profile'];
	$select="select * from admins WHERE admin_id='$edit_user'";
	$run_user=mysqli_query($con,$select);
	$row_user=mysqli_fetch_array($run_user);
	
    $admin_id=$row_user['admin_id'];
    $admin_name=$row_user['admin_name'];
	$admin_email=$row_user['admin_email'];
	$admin_pass=$row_user['admin_pass'];
	$admin_job=$row_user['admin_job'];
	$admin_country=$row_user['admin_country'];
	$admin_about=$row_user['admin_about'];
	$admin_contact=$row_user['admin_contact'];
     $admin_image=$row_user['admin_image'];
	

}



?>

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Edit User</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->




<?php?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Edit User</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Edit User</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post" enctype="mutlipart/form-data">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Name:</label>
				 		<div class="col-md-6">
				 	<input type="text" name="admin_name" class="form-control" value="<?php echo $admin_name;?>">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Email</label>
				 		<div class="col-md-6">
				 	<input type="email" class="form-control" name="admin_email" value="<?php echo $admin_email;?>">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Password</label>
				 		<div class="col-md-6">
				 			<input type="password" class="form-control" name="admin_password" value="<?php echo $admin_pass;?>">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Country</label>
				 		<div class="col-md-6">
				 <input type="text" class="form-control" name="admin_country" value="<?php echo $admin_country;?>">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Job</label>
				 		<div class="col-md-6">
				 	<input type="text" class="form-control" name="admin_job" value="<?php echo $admin_job?>">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Contact</label>
				 		<div class="col-md-6">
				<input type="text" class="form-control" name="admin_contact" value="<?php echo $admin_contact?>">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User About</label>
				 		<div class="col-md-6">
				 <textare type="text" class="form-control" name="admin_about" value="<?php echo $admin_about?>">

				 			</textare>
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Image</label>
				 		<div class="col-md-6">
				 			<input type="file" class="form-control" name="admin_image">
				 				<img src="admin_images/<?php echo $admin_image; ?>">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label"></label>
				 		<div class="col-md-6">
				 			<input type="submit" name="update" value="Update" class="btn btn-primary form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	

				 </form>
			</div> <!-- body -->
		</div> <!-- card -->


	</div> <!-- col -->
</div><!--  row -->


<?php
if(isset($_POST['update'])){
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_password'];
	$admin_job=$_POST['admin_job'];
	$admin_country=$_POST['admin_country'];
	$admin_about=$_POST['admin_about'];
	$admin_contact=$_POST['admin_contact'];
     $admin_image=$_FILES['admin_image']['name'];
     $admin_image_tmp=$_FILES['admin_image']['tmp_name'];

	
	move_uploaded_file($admin_image_tmp,'admin_images/$admin_image');
	$insert="update admins set admin_name='$admin_name',admin_email='$admin_email',admin_pass='$admin_pass'admin_image='$admin_image',admin_contact='$admin_contact',admin_country='$admin_country',admin_job='$admin_job',admin_about='$admin_about' WHERE admin_id='$admin_id'";

$run_admin=mysqli_query($con,$insert);
	if($run_admin){
		echo "<script>alert('User Profile  Has been updated')</script>";
		echo "<script>window.open('login.php','_self')</script>";

	}

}



?>

























