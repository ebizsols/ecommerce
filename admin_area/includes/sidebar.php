<?php

if(!isset($_SESSION['admin_email'])){
   echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<div class="top container-fluid bg-dark" style="height: 65px; position: fixed; z-index: 1; margin-top:-60px;">



	<div class="left-box">
	<br>	
<a href="index.php?dashboard" class="text-white" style="font-size:18px; text-decoration: none; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin Panel</a>

	</div> <!-- left box -->






	<div class="dropdown" style="margin-left:1150px;">
  <button type="button" class="btn btn-primary  dropdown-toggle" data-toggle="dropdown" style="margin-top:-28px;" >
    <a href="#" class="text-white" style="text-decoration:none;"><i class="fa fa-user mr-2" ></i>
    	<?php echo  $admin_name;?>

    </a>
  </button>
  <div class="dropdown-menu">
    
    <li>
    	<a class="dropdown-item font-weight-bold" href="index.php?user-profile?id=<?php echo $admin_id;?>">
    		<i class="fa fa-user"></i>&nbsp;&nbsp;Profile
    	</a>
    </li>


     <li>
    	<a class="dropdown-item font-weight-bold" href="index.php?view_products">
    		<i class="fa fa-envelope"></i> &nbsp;&nbsp;Products
    		<span class="badge badge-pill badge-primary"><?php echo $count_pro;?></span>
    	</a>
    </li>


     <li>
    	<a class="dropdown-item font-weight-bold" href="index.php?view_customer">


    		<i class="fa fa-users"></i>&nbsp;&nbsp;Customer
    		<span class="badge badge-pill badge-primary"><?php echo $count_cus;?></span>

    	</a>
    </li>



     <li style="margin-left: -20px;" >
    	<a class="dropdown-item font-weight-bold" href="index.php?pro_cat">
    		<i class="fa fa-gear"></i>&nbsp;Product Cateogries
    		<span class="badge badge-pill badge-primary"><?php echo $count_pro_cat;?></span>

    	</a>
    </li>
    <hr>
    <li>
    	<a class="dropdown-item font-weight-bold" href="logout.php">
    		<i class="fa fa-gear"></i>&nbsp;&nbsp;Logout
    	</a>
    </li>


  </div>


</div><!--  container -->
</div> <!-- top -->

<br><br><br>
 <!--////////////////////////////// sidebar///////////////////////////////////////////// -->

 <div class="sidebar bg-dark text-white" style="width:200px; height: 800px; position: fixed;z-index: 2; margin-top: -70px;">
 	<div class="row">
 		<div class="col-md-4">
 			<ul class="side-nav" style="list-style: none;font-size: 17px; margin-top:20px; margin-right: 20px;">
				<li style="margin-bottom:25px;">
					<a class="text-white" href="index.php?dashboard">	
					<i class="fa fa-dashboard text-white">&nbsp;Dashboard</i>
			</a>
			</li>
			
				<li style="margin-bottom:27px;"><a class="text-white" style="font-size:17px;" href="#" data-toggle="collapse" data-target="#products"> <i class="fa fa-table">&nbsp;Products</i></a>
				</li>

				<ul class="collapse" id="products" style="list-style:none;" >
					<li style="width: 300px;">
						<a href="index.php?insert_product" class="text-white" style="text-decoration: none; font-size:17px;">Insert Product</a>
					</li>
						<li style="width: 300px; text-decoration: none; margin-bottom: 10px;">
						<a href="index.php?view_product" class="text-white" style="text-decoration: none;">View Product</a>
					</li>
					
                  </ul><!-- collapse
 -->
                   </li>
			


		

		
				<li style="margin-bottom:22px; width:300px;"><a class="text-white " href="#" data-toggle="collapse" data-target="#pcats"><i class="fa fa-table text-white">&nbsp;&nbsp;Product Cateogries</i></a>
					
				<ul class="collapse" id="pcats" style="list-style: none; margin-left:-70px; margin-top: 20px;">
					<li>
						<a href="index.php?insert_product_catt" style="text-decoration: none;" class="text-white">Insert Product Cateogries</a>
					</li>
						<li>
						<a href="index.php?view_product_cat" class="text-white" style="text-decoration: none;">View Product Cateogries</a>
					</li>
					
                  </ul><!-- collapse
 -->
                   </li>
			







		
				<li style="margin-bottom:22px;"><a class="text-white" href="#" data-toggle="collapse" data-target="#cats"><i class="fa fa-table text-white">&nbsp;&nbsp;Cateogries</i></a>
					
				<ul class="collapse" id="cats" style="list-style: none; margin-left: -20px; margin-top: 20px;">
					<li style="width: 300px;">
						<a href="index.php?insert_cateogry" style="text-decoration: none;" class="text-white">Insert Cateogry</a>
					</li>
					<li style="width: 300px;">
						<a href="index.php?view_cateogry" class="text-white" style="text-decoration: none;">View Cateogry</a>
					</li>
				</ul>
			</li>




			<li style="margin-bottom:22px; width: 300px;"><a class="text-white" href="#" data-toggle="collapse" data-target="#box"><i class="fa fa-arrows text-white">&nbsp;Boxes Section&nbsp;</i><i class="fa fa-caret-down"></i></a>
					
				<ul class="collapse" id="box" style="list-style: none; margin-left: -20px; margin-top: 20px;">
					<li style="width: 400px;">
						<a href="index.php?insert_box" style="text-decoration: none;" class="text-white">Insert Box </a>
					</li>
					<li style="width: 300px;">
						<a href="index.php?view_box" class="text-white" style="text-decoration: none;">View Box</a>
					</li>
				</ul>
			</li>
		
		



























	
				<li style="margin-bottom:22px;"><a class="text-white" href="#" data-toggle="collapse" data-target="#slider"><i class="fa fa-table text-white">&nbsp;&nbsp;Slider</i></a>
					
				<ul class="collapse" id="slider" style="list-style: none; margin-top: 20px;">
					<li style="width: 300px;">
						<a href="index.php?insert_slider" class="text-white" style="text-decoration: none;">Insert Slider</a>
					</li>
					<li style="width: 300px;">
						<a  href="index.php?view_slider"class="text-white" style="text-decoration: none;">View Slider</a>
					</li>


</ul>

			</li>










				<li style="margin-bottom:22px; width: 300px;"><a class="text-white" href="index.php?view_customer"><i class="fa fa-edit text-white">&nbsp;&nbsp;</i>View Customer
				</a>
					
				

			</li>


					


					
				<li style="margin-bottom:22px; width: 300px;"><a class="text-white" href="index.php?view_order"><i class="fa fa-list text-white">&nbsp;&nbsp;</i>
					View Order

				</a>
					
				

			</li>


					

				<li style="margin-bottom:22px; width: 300px;"><i class="fa fa-pencil text-white"></i><a class="text-white" href="index.php?view_payments">&nbsp;&nbsp;View Payment</a>
					
				

			</li>


		

					
		

		
				<li style="margin-bottom:22px;"><a class="text-white" href="index.php?view_payments" data-toggle="collapse" data-target="#users"><i class="fa fa-pencil text-white">&nbsp;&nbsp;Users</i></a>
					
				<ul class="collapse" id="users" style="width:800px; margin-left:-20px; margin-top: 10px; list-style: none;">
					<li style="margin-bottom: 10px;">
						<a  style="text-decoration: none; color: white;" href="index.php?insert_user">Insert Users</a>
					</li>
					<li>
						<a  style="text-decoration: none; color: white;" href="index.php?view_user">View User</a>
					</li>
					<li>
						<a  style="text-decoration: none; color: white; margin-top: 10px;" href="index.php?user_profile?id=<?php echo $admin_id?>">Edit Profile</a>
					</li>


</ul>

			</li>


				</ul>
 		</div> <!-- col md -4 -->


 	</div><!--  row -->
 </div> <!-- sidebar -->




<?php
}
?>


















