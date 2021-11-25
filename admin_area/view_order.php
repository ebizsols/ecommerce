
<?php?>
<div class="row">
	
<div class="col-lg-12">
	
<div class="braedcrumb">
	<li>
		<i class="fa fa-dashboard"></i>Dashboard/ Orders
	</li>

</div> <!-- braed -->
</div> <!-- 12 -->


</div><!--  row -->



<div class="row">
	<div class="col-lg-12">
		
<div class="card">
	<div class="card-header">
		
		<h3 class="card-title">
			<i class="fa fa-money"></i>View  Orders
		</h3>
	</div> <!-- title -->
</div> <!-- header -->

<div class="card-body">
	<div class="table-responsive">
		<table class="table table-bordered table-hover table-striped">
			
			<thead>
				<tr>
					<th width="200" class="bg-primary text-white" style="border:2px solid white;">Order No:</th>
					<th width="200" class="bg-primary text-white" style="border:2px solid white;">Customer Email:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Invoice No:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Product Title:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Product Quantity:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Product Size:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Order Date:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Total Amount:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Order Status:</th>
					<th width="200"class="bg-primary text-white" style="border:2px solid white;">Delete Order:</th>
					


					
				</tr>
			</thead>
			<tbody>
				<?php
				$i=0;
				$select_cust="select * from customer_order";
				$run_cust_order=mysqli_query($con,$select_cust);
				while($row_cust=mysqli_fetch_array($run_cust_order)){
					$order_id=$row_cust['order_id'];
				     $customer_id=$row_cust['customer_id'];
					$product_id=$row_cust['product_id'];
                       $due_amount=$row_cust['due_amount'];
                      $invoice_no=$row_cust['invoice_no'];
					$qty=$row_cust['Quantity'];
					$size=$row_cust['size'];
					$order_date=$row_cust['order_date'];
					$order_status=$row_cust['order_status'];

					$select_pro="select * from products WHERE product_id='$product_id'";
					$run_order=mysqli_query($con,$select_pro);
					$row_fetch=mysqli_fetch_array($run_order);
					$pro_title=$row_fetch['product_title'];
                     $i++;

					
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td>
							<?php
							$select_cust="select * from customers WHERE customer_id=' $customer_id'";
							$run_cust=mysqli_query($con,$select_cust);
							$fetch_cust=mysqli_fetch_array($run_cust);
							$cust_email=$fetch_cust['customer_email'];
							echo $cust_email;
							?>
						</td>

						<td  ><?php echo $invoice_no;?></td>
						<td ><?php echo $pro_title;?></td>
						<td ><?php echo $qty ;?></td>
						<td ><?php echo $size;?></td>
						
						<td ><?php echo $order_date;?></td>
						<td ><?php echo  $due_amount;?></td>


                            <td >
                            	<?php
                            	if($order_status=='pending'){
                            		echo $order_status='pending';
                            	}
                            	else{
                            		echo $order_status='Complete';
                            	}


                            	?>
                            </td>



						<td >
							<a href="index.php?delete_order=<?php echo $order_id;?>">
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





















