

<?php?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Insert User</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Insert User</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Name:</label>
				 		<div class="col-md-6">
				 			<input type="text" name="admin_name" class="form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Email</label>
				 		<div class="col-md-6">
				 			<input type="email" class="form-control" name="admin_email">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Password</label>
				 		<div class="col-md-6">
				 			<input type="epassword" class="form-control" name="admin_password">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Country</label>
				 		<div class="col-md-6">
				 			<input type="text" class="form-control" name="admin_country">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Job</label>
				 		<div class="col-md-6">
				 			<input type="text" class="form-control" name="admin_job">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Contact</label>
				 		<div class="col-md-6">
				 			<input type="text" class="form-control" name="admin_contact">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User About</label>
				 		<div class="col-md-6">
				 			<input type="text" class="form-control" name="admin_about">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">User Image</label>
				 		<div class="col-md-6">
				 			<input type="file" class="form-control" name="admin_image">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label"></label>
				 		<div class="col-md-6">
				 			<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	

				 </form>
			</div> <!-- body -->
		</div> <!-- card -->


	</div> <!-- col -->
</div><!--  row -->


<?php
if(isset($_POST['submit'])){
	$admin_name=$_POST['admin_name'];
	$admin_email=$_POST['admin_email'];
	$admin_pass=$_POST['admin_password'];
	$admin_job=$_POST['admin_job'];
	$admin_country=$_POST['admin_country'];
	$admin_about=$_POST['admin_about'];
	$admin_contact=$_POST['admin_contact'];
     $admin_image=$_FILES['admin_image']['name'];
     $admin_image_tmp=$_FILES['admin_image']['tmp_name'];

	
	move_uploaded_file($admin_image_tmp,'admin_images/ $admin_image');
	$insert="insert into admins(admin_name,admin_email,admin_pass,admin_image,admin_contact,admin_country,admin_job,admin_about)values('$admin_name','$admin_email','$admin_pass','$admin_image','$admin_contact','$admin_country','$admin_job','$admin_about')";
	$run_admin=mysqli_query($con,$insert);
	if($run_admin){
		echo "<script>alert('New Admin Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_user','_self')</script>";

	}

}



?>












