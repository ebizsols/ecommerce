<?php?>

<?php?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard"></i>Dashboard/ Insert Slider
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Insert Slider</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider Name:</label>
				 		<div class="col-md-6">
				 			<input type="text" name="slider_name" class="form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider Image:</label>
				 		<div class="col-md-6">
				 			<input type="file" class="form-control" name="slider_image">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->

				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Slider url:</label>
				 		<div class="col-md-6">
				 			<input type="text" class="form-control" name="slider_url">
				 				
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label"></label>
				 		<div class="col-md-6">
				 			<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->
				 	

				 </form>
			</div> <!-- body -->
		</div> <!-- card -->


	</div> <!-- col -->
</div><!--  row -->


<?php
if(isset($_POST['submit'])){
	$slider_name=$_POST['slider_name'];
	$slider_url=$_POST['slider_url'];


	$slider_image=$_FILES['slider_image']['name'];
    $tmp_name=$_FILES['slider_image']['tmp_name'];

	$insert_slider="select * from slider";
	$run_sliedr=mysqli_query($con,$insert_slider);
	$count_slider=mysqli_num_rows($run_sliedr);
	if($count_slider<4){
       move_uploaded_file($slider_image_tmp,'slider_images/$slider_image');
       $insert_into_slider="insert into slider(slider_name,slider_image,slider_url)values('$slider_name','$slider_image','$slider_url')";
	$run_sliedr=mysqli_query($con,$insert_into_slider);
	echo "<script>alert('New slider Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_slider','_self')</script>";
	}

	else{
	echo "<script>alert(' You Have already inserted 4 sliders')</script>";


	}

}



?>












