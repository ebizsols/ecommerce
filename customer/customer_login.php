<?php?>
<div class="box">
	<div class="box-header">
		<center>
			<h1>Login</h1>
			<p class="lead">Already our customer</p>
		</center>



	</div> <!-- hedaer -->
	<form action="checkout.php" method="POST">
		<div class="form-group">
			<label>E-mail:</label>
			<input type="email" name="email" class="form-control" style="border-top:0!important; border-right: 0; border-left: 0; border-bottom: 0.5px solid lightgrey; outline: none!important;">
		</div>
		<div class="form-group">
			<label>Password:</label>
			<input type="password" name="password" class="form-control"style="border-top:0!important; border-right: 0; border-left: 0; border-bottom: 0.5px solid lightgrey; outline: none!important;">
		</div>
		<div class="text-center">
			<button name="login" value="Login" class="btn btn-primary">
				<i class="fa fa-sign-in"></i> &nbsp;Login
				</button>
			


		</div>
		


	</form>
	         <center>
	         	<a href="customer_registration.php">
	         		<h3>New ? Register Now</h3>

	         	</a>
		
	          </center>
	


</div>
               <?php
               if(isset($_POST['login'])){
               	$customer_email=$_POST['email'];
                $customer_password=$_POST['password'];
                $select="select * from customers WHERE customer_email='$customer_email' AND customer_password='$customer_password'";
                $run=mysqli_query($con,$select);
               $num_customer =mysqli_num_rows($run);
               $ip=getRealIpAddr();
               $select="select * from cart WHERE ip_address=' $ip'";
                $run=mysqli_query($con,$select);
                $check_row=mysqli_num_rows($run);
                if($num_customer==0){
                	echo"<script>alert('Passsword & Email is wrong')</script>";
                	exit();
                }
               if($num_customer==1 AND $check_row==0){
               	$_SESSION['customer_email']=$customer_email;
               	echo"<script>alert('You are logged In')</script>";
               	echo "<script>window.open('customer/my_account.php','_self')</script>";
               }
               else{
               	$_SESSION['customer_email']=$customer_email;
               	echo"<script>alert('You are logged In')</script>";
               	echo "<script>window.open('checkout.php','_self')</script>";


               }


                

               }


?>












