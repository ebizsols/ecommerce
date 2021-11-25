

<div id="footer">
	
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-6">
			<h4> Pages </h4>
			<ul>
				<li><a href="cart.php">Shopping cart</a></li>
				<li><a href="contact.php">Contact us</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="checkout.php">My Account</a></li>
			</ul>
			<hr>
			<h4>Users Section</h4>
			<ul>
				<li><a href="checkout.php">Login</a></li>
				<li><a href="customer_registration.php">Register</a></li>
			
			</ul>
			<hr class="hidden-md hidden-lg hidden-sm">
		</div> <!-- col md 3 -->



<div class="col-md-3 col-sm-6">
	<h4>Top Product Cateogries</h4>
	<ul>
		<?php
		$select_p_cat="select * from product_cateogries";
		$run_p_cat=mysqli_query($con,$select_p_cat);
		while($row_p_cat=mysqli_fetch_array($run_p_cat)){
			$p_cat_id=$row_p_cat['p_cat_id'];
			$p_cat_title=$row_p_cat['p_cat_title'];
			echo "

			<li style='text-transform:lowercase;'><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>

			";

		}


		?>





		

	</ul>
	<hr class="hidden-md hidden-lg">


</div> <!-- cols md-3 -->


<div class="col-md-3 col-sm-6">

	<h4>where to find us</h4>
	<p class="text-muted">
	
	<br>sabapervaz991@gmail.com
	<br>0317-8122399
</p>

<a href="contact.php">Goto contact us page</a>
<hr class="hidden-md hidden-lg">

</div> <!-- col -->

<div class="col-md-3 col-sm-6">
	<h4> Get the news</h4>
	<p class="text-muted">
		
		Subscriber her for getting news of icsrlab ayodha
	</p>
	<form  action="" method="post">
		<div class="input-group">
			<input type="text" name="email" class="form-control">
			<span class="input-group-btn">
				<input type="submit" name="" class="btn btn-default" value="subscribe">
			</span>
		</div>
	</form>
	<hr>
	<h4>Stay In Touch</h4>
	<p class="social">
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href=""><i class="fa  fa-twitter"></i></a>
		<a href=""> <i class="fa fa-instagram"></i></a>
		<a href=""><i class="fa fa-google-plus"></i></a>
		<a href=""><i class="fa fa-envelope"></i></a>
	</p>

</div> <!-- cols -->




	</div><!--  row -->

</div><!--  container -->



</div> <!-- footer -->

<div id="copyright" style="background:#333;
 	color:#ccc;
 	padding:15px;
 	font-size:12px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
<p class="pull-left" style="margin: 0;">
					&copy; 2019 Saba pervaz
				</p>
			</div> <!-- col -->
			<div class="col-md-6">
			<p class="pull-right" style="margin: 0;
">
				Template by Saba Pervaz:<a href=""></a>
			</p>
		</div>
		</div> <!-- row -->
		
	</div> <!-- conta -->
	
</div> <!-- copyright -->















