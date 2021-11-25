<?php?>
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
				 			<input type="text" name="p_cat_title" class="form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Product Cateogry Description</label>
				 		<div class="col-md-6">
				 			<textarea type="text" class="form-control" name="p_cat_desc">
				 				
				 			</textarea>
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
	$p_cat_title=$_POST['p_cat_title'];
	$p_cat_desc=$_POST['p_cat_desc'];
	$insert="insert into product_cateogries(p_cat_title,p_cat_desc)values('$p_cat_title','$p_cat_desc')";
	$run_p_cat=mysqli_query($con,$insert);
	if($run_p_cat){
		echo "<script>alert('New Product Cateogry Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_p_cats','_self')</script>";

	}

}



?>












