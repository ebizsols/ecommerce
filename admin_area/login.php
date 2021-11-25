<?php
session_start();
include'includes/db.php';
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="container">
<form class="form-login" action="" method="post">
	<h2 class="form-login-heading">Admin Login</h2>
	<div class="form-group">
	<input type="text" class="form-control" name="admin_email" placeholder="Email Address" required>
</div>
<div class="form-group">
	<input type="password" name="admin_pass" class="form-control" required placeholder="Password">
</div>
	<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin_login">Login</button>

	<h5 class="forgot-password">
		<a href="forgot-password.php">Lost your password? Forgot Password</a>
	</h5>
	
</form>
	


</div> <!-- comtainer -->
</body>
</html>
 <?php
 if(isset($_POST['admin_login'])){
 	$admin_email=mysqli_real_escape_string( $con,$_POST['admin_email']);
 	$admin_pass= mysqli_real_escape_string($con,$_POST['admin_pass']);

 	$select="select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
 	$run=mysqli_query($con,$select);
 	$count=mysqli_num_rows($run);
 	if($count==1){
 		$_SESSION['admin_email']=$admin_email;
 		echo "<script>alert('Your are logged')</script>";
 		echo"<script>window.open('index.php?dashboard','_self')</script>";
 	}
 	else{
 		echo "<script>alert('Email Password is incorrect')</script>";
 	}



 }


?>














