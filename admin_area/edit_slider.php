<?php

if(isset($_GET['edit_slider'])){
	$edit_slider=$_GET['edit_slider'];
	$select="select * from slider WHERE id='$edit_slider'";
	$run_cat=mysqli_query($con,$select);
	$row_eddit=mysqli_fetch_array($run_cat);
	$id=$row_eddit['Id'];
	$slider_name=$row_eddit['slider_name'];
	$slider_image=$row_eddit['slider_image'];
	$slider_url=$row_eddit['slider_url'];


}



?>

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Edit Cateogry</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Insert Product Cateogry</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider Name:</label>
				 		<div class="col-md-6">
				 			<input type="text" name="Slider_name" class="form-control" value="<?php echo $slider_name;?>"><br>
				 			
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider Image:</label>
				 		<div class="col-md-6">
				 	<input type="file" class="form-control" name="slider_image">
				 	<img src="slider_images/<?php echo $slider_image; ?>"  width="70" height="70">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider Url:</label>
				 		<div class="col-md-6">
				 			<input type="text" name="Slider_url" class="form-control" value="<?php echo $slider_url;?>"><br>
				 			
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label"></label>
				 		<div class="col-md-6">
				 			<input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	

				 </form>
			</div> <!-- body -->
		</div> <!-- card -->


	</div> <!-- col -->
</div><!--  row -->


<?php
if(isset($_POST['update'])){
	$slider_name=$_POST['slider_name'];
	$slider_url=$_POST['slider_url'];
	$slider_image=$_FILES['slider_image']['name'];
	$slider_image_tmp=$_FILES['slider_image']['tmp_name'];
	move_uploaded_file($slider_image_tmp,'slider_image/$slider_image');

	$update="update slider set slider_name='$slider_name',slider_image='$slider_image' slider_url='$slider_url'  WHERE Id='$id'";
$run_slider=mysqli_query($con,$update);
	if($run_slider){
		echo "<script>alert('Slider Has been updated')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";

	}

}



?>













