<?php

?>

<div class="box">
	<?php
	$session_email=$_SESSION['customer_email'];
	$select_customers="select * from customers WHERE customer_email='$session_email'";
	$run= mysqli_query($con,$select_customers);
	$row=mysqli_fetch_array($run);
	$customer_id=$row['customer_id'];
     ?>
	
		<h1 class="text-center">Payment Options</h1>
		
			<center>
			<p class="lead">
				<a href="order.php?c_id=<?php echo $customer_id;?>"><a href="order.php?c_id=<?php echo $customer_id;?>" class="btn btn-primary">Confirm Payment</a>
				<img src="images/IMG-20210618-WA0007.jpg" width='800' height='270' style="margin-left:-9px; margin-top: 30px;" class="img-responsive"></a>
				</p>
			
		</center>

	
</div>