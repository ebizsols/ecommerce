<?php?>
<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ Payment
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View  Payment
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<thead>
				<tr>
					<th class="bg-primary text-white" style="border:2px solid white">Payment No:</th>
					<th  class="bg-primary text-white" style="border:2px solid white">Invoice No:</th>
					<th  class="bg-primary text-white" style="border:2px solid white">Amount Paid</th>
					<th  class="bg-primary text-white" style="border:2px solid white">Payment MOde</th>
					<th  class="bg-primary text-white" style="border:2px solid white">Refrence No</th>
					
					<th  class="bg-primary text-white" style="border:2px solid white">Payment Date</th>
					<th  class="bg-primary text-white" style="border:2px solid white">Delete Payment</th>

				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$select_payment="select * from payments";
				$run_pay=mysqli_query($con,$select_payment);
				while($row=mysqli_fetch_array($run_pay)){
				$payment_id=$row['payment_id'];
					$invoice_id=$row['invoice_id'];
					$amount=$row['amount'];
					$payment_mode=$row['payment_mode'];
					$refrence_no=$row['refrence_no'];
					$payment_date=$row['payment_date'];

					$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo 	$invoice_id?></td>
						<td>PKR &nbsp;<?php echo $amount?></td>
						<td><?php echo 	$payment_mode?></td>
						<td><?php echo $refrence_no?></td>
						<td><?php echo 	$payment_date?></td>

						<td>
							<a href="index.php?delete_payment=<?php echo 	$payment_id;?>">
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





















