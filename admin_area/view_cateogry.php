<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ View Cateogries
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View  Cateogries
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<thead>
				<tr>
					<th class="bg-primary text-white" style="border:2px solid white;">Cateogry Id</th>
					<th class="bg-primary text-white" style="border:2px solid white;"> Cateogry Title</th>
					<th class="bg-primary text-white" style="border:2px solid white;"> Cateogry Description</th>
					<th class="bg-primary text-white" style="border:2px solid white;"> Delete Cateogry</th>
					<th class="bg-primary text-white" style="border:2px solid white;" > Edit Cateogry</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$select_cat="select * from cateogries";
				$run_p_cat=mysqli_query($con,$select_cat);
				while($row=mysqli_fetch_array($run_p_cat)){
					$cat_id=$row['cat_id'];
					$cat_title=$row['cat_title'];
					$cat_desc=$row['cat_desc'];
					$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $cat_title?></td>
						<td><?php echo $cat_desc?></td>
						<td>
							<a href="index.php?delete_cat=<?php echo $cat_id;?>">
								<i class="fa fa-trash"></i>&nbsp;Delete
							</a>
						</td>
						<td>
							<a href="index.php?edit_cat=<?php echo $cat_id;?>">
								<i class="fa fa-pencil"></i>&nbsp;Edit
							</a>
						</td>
					</tr>
					<?php

				}




				?>
			</tbody>
		</table>
	</div>
</div> <!-- card body -->
	</div> <!-- col -->
</div><!-- >row -->





















