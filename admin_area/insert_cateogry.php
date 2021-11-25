<?php?>

<?php?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Insert Cateogry</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Insert Cateogry</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label"> Cateogry Title</label>
				 		<div class="col-md-6">
				 			<input type="text" name="cat_title" class="form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Cateogry Description</label>
				 		<div class="col-md-6">
				 			<textarea type="text" class="form-control" name="cat_desc">
				 				
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
	$cat_title=$_POST['cat_title'];
	$cat_desc=$_POST['cat_desc'];
	$insert="insert into cateogries(cat_title,cat_desc)values('$cat_title','$cat_desc')";
	$run_p_cat=mysqli_query($con,$insert);
	if($run_p_cat){
		echo "<script>alert('New Cateogry Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_p_cats','_self')</script>";

	}

}



?>












