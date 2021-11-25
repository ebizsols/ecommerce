<?php?>
<div class="box">
<center>
	<h1 class="">My Order</h1>
	<p>Order is here for custmers which they orders.<a href="../contactus.php"> Contact us , our customers service center is working for you 27/7.</a></p>

</center>

<hr>
<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Sr.No</th>
				<th>Due Amount</th>
				<th>Invoice No</th>
				<th>Quantity</th>
				<th>Size</th>
				<th>Order Date</th>
				<th>Paid/Unpaid</th>
				<th>Status</th>
			</tr>
			
		</thead>
		<tbody>
                <?php
                $customer_session=$_SESSION['customer_email'];
                $select="select * from customers WHERE customer_email='$customer_session'";
                $run=mysqli_query($con, $select);
                while($row=mysqli_fetch_array($run)){
                	$customer_id=$row['customer_id'];
                	$select="select * from customer_order WHERE customer_id='$customer_id'";
                	$run=mysqli_query($con,$select);
                	$i=0;
                	while($row=mysqli_fetch_array($run)){

                   $order_id=$row['order_id'];
                   $due_amount=$row['due_amount'];
                   $invoice_no=$row['invoice_no'];
                   $Quantity=$row['Quantity'];
                   $due_size=$row['size'];
                   $due_date=$row['order_date'];
                    $due_status=substr($row['order_status'], 0,11);
                    $i++;
                    if($due_status=='pending'){
                    	$due_status="Unpaid";
                    }
                    else{
                    	$due_status="Paid";

                    }

                	
                
                	echo "<tr>
				<td> $i;</td>
				<td>$due_amount</td>
				<td>$invoice_no </td>
				<td> $Quantity </td>
				<td>$due_size</td>
				<td>$due_date </td>
				<td>$due_status</td>
				<td><a href='confirm.php?order_id= $order_id; target='_blank' class='btn btn-primary btn-sm'>Confirm If Paid</a></td>
			     </tr>";

                
                }

}


                ?>





			
			
			
		</tbody>
		
	</table>
</div><!-- table-responsiv -->
</div> <!-- box -->