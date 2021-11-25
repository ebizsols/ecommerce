
<div class="card sidebar-menu">
	<div class="card-header">



		<?php
		$session_customer=$_SESSION['customer_email'];
		$get_cust="select * from customers WHERE customer_email='$session_customer'";
		$run_cust=mysqli_query($con,$get_cust);
		$row_cust=mysqli_fetch_array($run_cust);
		$cust_img=$row_cust['customer_image'];
		$cust_name=$row_cust['customer_name'];
		if(!isset($_SESSION['customer_email'])){
			echo "";
		}
		else{
			echo "
			<center>
			<img src='customer_images/$cust_img' width='200' height='200' class='img-responsive'>
		</center>
		<br>
		<h6 class='text-center card-title' style='font-style:italic;'> Name:$cust_name</h6>

			";


		}


		?>
		
		

	</div><!--  header -->
	<div class="card-body">
		<ul style="list-style: none;" >
			<li class="<?php if(isset($_GET['my_order'])) {echo "active";}?>" >
	<a href="my_account.php?my_order" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class="fa fa-list"></i>  My order</a>

			</li>
			
			<li class="<?php if(isset($_GET['pay_offline'])){ echo "active" ;}?>">
				<a href="my_account.php?pay_offline" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class=" fa fa-bolt"></i>Pay Offline</a>

			</li>
			<li class="<?php if(isset($_GET['edit_act'])){ echo "active";}?>">
				<a href="my_account.php?edit_act" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class=" fa fa-pencil"></i> Edit Account</a>

			</li>
			<li class="<?php if(isset($_GET['chang_pass'])){echo "active";}?>">
				<a href="my_account.php?chang_pass" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class=" fa fa-user"></i>Change Password</a>

			</li>
			<li class="<?php if(isset($_GET['my_wishlist'])) {echo "active";}?>">
				<a href="my_account.php?my_wishlist" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class=" fa fa-heart"></i>My Wishlist</a>

			</li>
			<li class="<?php if(isset($_GET['delete_act'])) {echo "active";}?>">
				<a href="my_account.php?delete_act" style="font-weight: bold; font-size:15px;"><i style="margin-right: 10px;" class=" fa fa-trash"></i>Delete Account</a>

			</li>
			<li class="<?php if(isset($_GET['logout'])){ echo "active";}?>">

				<a href="my_account.php?logout" style="font-weight: bold; font-size:15px;"> <i style="margin-right: 10px;" class="fa fa-sign-out"></i> Logout</a>

			</li>

		</ul>
	</div> <!-- boyd -->
</div><!--  card -->