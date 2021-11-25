
<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ View Users
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View  Users
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<thead>
				<tr>
					<th class="bg-primary text-white" style="border:2px solid white;" >User Name:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >User Email:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >User Image:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >User Country:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >User Job:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Delete User:</th>


					
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$select_admin="select * from admins";
				$run_admin=mysqli_query($con,$select_admin);
				while($row=mysqli_fetch_array($run_admin)){
					$admin_id=$row['admin_id'];
					$admin_name=$row['admin_name'];
					$admin_email=$row['admin_email'];
					$admin_image=$row['admin_image'];
					$admin_country=$row['admin_country'];
					$admin_job=$row['admin_job'];


					
					$i++;
					?>
					<tr>
						<td><?php echo $admin_name?></td>
						<td><?php echo $admin_email?></td>
						<td>
							<img src="admin_images/<?php echo $admin_image;?>" width="70" height="70">
						</td>
						<td><?php echo $admin_country?></td>
						<td><?php echo $admin_job?></td>

						<td>
							<a href="index.php?delete_user=<?php echo $admin_id;?>">
								<i class="fa fa-trash"></i>&nbsp;Delete
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





















