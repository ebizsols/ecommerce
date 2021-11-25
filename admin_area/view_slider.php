<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ View Slider
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View Sliders
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body d-flex flex-row">
	<?php
				$i=0;
				$select_slider="select * from slider";
				$run_slider=mysqli_query($con,$select_slider);
				while($row=mysqli_fetch_array($run_slider)){
					$slider_id=$row['Id'];
					$slider_name=$row['slider_name'];
					$slider_image=$row['slider_image'];
					?>
                     
						<div class="col-lg-3 col-md-3 ">
						<div class="card card-primary">
						
							 <div class="card-header bg-primary">
							 	<h5 class="card-title text-white" align="center">
							 		<?php echo $slider_name?>
							 	</h5>
							 </div> <!-- header -->

							 <div class="card-body">
							 	<img src="slider_images/<?php echo $slider_image;?>" width="200" height="150" >

							 </div> <!-- body -->
							 <div class="card-footer bg-primary">
							 	
							 		<a href="index.php?delete_slider=<?php echo $slider_id?>" class="pull-left text-white">
								<i class="fa fa-trash"></i>&nbsp;Delete
							</a>


							<a href="index.php?edit_slider=<?php echo $slider_id?>" class="pull-right text-white">
								<i class="fa fa-pencil"></i>&nbsp;Edit
							</a>
							 	<div class="clearfix"></div>
							 </div> <!-- footer -->


	

						</div> <!-- primary -->
				

</div> <!-- col -->


<?php

				}




				?>

					
					
</div> <!-- card body -->
	</div> <!-- col -->
</div><!-- >row -->





















