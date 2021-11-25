<?php

if(isset($_GET['edit_cat'])){
	$edit_cat=$_GET['edit_cat'];
	$select="select * from cateogries WHERE cat_id='$edit_cat'";
	$run_cat=mysqli_query($con,$select);
	$row_eddit=mysqli_fetch_array($run_cat);
	$id=$row_eddit['cat_id'];
	$title=$row_eddit['cat_title'];
	$desc=$row_eddit['cat_desc'];

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
				 <form class="form-horizontal" action="" method="post">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label"> Cateogry Title</label>
				 		<div class="col-md-6">
				 			<input type="text" name="cat_title" class="form-control" value="<?php echo $title;?>">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Product Cateogry Description</label>
				 		<div class="col-md-6">
				 			<textarea type="text" class="form-control" name="cat_desc">
				 				<?php echo $desc?>
				 			</textarea>
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
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$update="update cateogries set cat_title='$cat_title',cat_desc='$cat_desc' WHERE cat_id='$id'";
$run_cat=mysqli_query($con,$update);
	if($run_cat){
		echo "<script>alert('Cateogry Has been updated')</script>";
		echo "<script>window.open('index.php?view_cateogry','_self')</script>";

	}

}



?>













