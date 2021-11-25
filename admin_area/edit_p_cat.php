<?php
if(isset($_GET['edit_p_cat'])){
	$edit_p_cat=$_GET['edit_p_cat'];
	$select="select * from product_cateogries WHERE p_cat_id='	$edit_p_cat'";
	$run_p_cat=mysqli_query($con,$select);
	$row_eddit=mysqli_fetch_array($run_p_cat);
	$id=$row_eddit['p_cat_id'];
	$title=$row_eddit['p_cat_title'];
	$desc=$row_eddit['p_cat_desc'];


}



?>

<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Insert Product Cateogry</i>
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
				 		<label class="col-md-3 control-label">Product Cateogry Title</label>
				 		<div class="col-md-6">
				 			<input type="text" name="p_cat_title" class="form-control" value="<?php echo $title;?>">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Product Cateogry Description</label>
				 		<div class="col-md-6">
				 			<textarea type="text" class="form-control" name="p_cat_desc">
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
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$update="update product_cateogries set p_cat_title='$p_cat_title',p_cat_desc='$p_cat_desc' WHERE p_cat_id='$id'";



	
	$run_p_cat=mysqli_query($con,$update);
	if($run_p_cat){
		echo "<script>alert(' Product Cateogry Has been updated')</script>";
		echo "<script>window.open('index.php?view_p_cats','_self')</script>";

	}

}



?>












