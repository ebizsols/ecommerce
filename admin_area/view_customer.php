
<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ Customers
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View  Customers
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<thead>
				<tr>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer No:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Name:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Email:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Image:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Country:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer City:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Phone Number:</th>
					<th class="bg-primary text-white" style="border:2px solid white;" >Customer Delete:</th>


					
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$select_cust="select * from customers";
				$run_cust=mysqli_query($con,$select_cust);
				while($row_cust=mysqli_fetch_array($run_cust)){
					$cust_id=$row_cust['customer_id'];
					$cust_name=$row_cust['customer_name'];
					$cust_email=$row_cust['customer_email'];
					$cust_image=$row_cust['customer_image'];

					$cust_country=$row_cust['customer_country'];
					$cust_city=$row_cust['customer_city'];
					$cust_contact=$row_cust['customer_contact_detail'];
					
					$i++;

					$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $cust_name;?></td>
						<td><?php echo $cust_email?></td>
						<td><img src="../customer/customer_images/<?php echo $cust_image ?>" width="70" height="70"></td>
						<td><?php echo $cust_country;?></td>
						<td><?php echo $cust_city?></td>
						<td><?php echo $cust_contact;?></td>
						<td>
							<a href="index.php?delete_cust=<?php echo $cust_id;?>">
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





















