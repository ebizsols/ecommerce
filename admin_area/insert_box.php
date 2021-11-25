

<?php?>
<div class="row">
	<div class="col-lg-12">
		<ol class="breadcrumb">
			<li>
				<i class="fa fa-dashboard">Dashboard/Insert Box</i>
			</li>

		</ol> <!-- breadcrumb -->

	</div> <!-- col -->



</div><!--  rw -->


<div class="row">
	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				
            <h3 class="card-title">
            	<i class="fa fa-money">Insert Box</i>
            </h3>
			</div> <!-- header -->

			<div class="card-body">
				 <form class="form-horizontal" action="" method="post">
				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Box Title</label>
				 		<div class="col-md-6">
				 			<input type="text" name="box_title" class="form-control">
				 			
				 		</div><!--  col md 6 -->
				 	</div> <!-- group -->


				 	<div class="form-group">
				 		<label class="col-md-3 control-label">Box Description</label>
				 		<div class="col-md-6">
				 			<textarea type="text" class="form-control" name="box_desc">
				 				
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
	$box_title=$_POST['box_title'];
	$box_desc=$_POST['box_desc'];
	$insert="insert into boxes_sec(box_title,box_desc)values('$box_title','$box_desc')";
	$run_p_cat=mysqli_query($con,$insert);
	if($run_p_cat){
		echo "<script>alert('New box Has been Inserted')</script>";
		echo "<script>window.open('index.php?view_box','_self')</script>";

	}

}



?>












