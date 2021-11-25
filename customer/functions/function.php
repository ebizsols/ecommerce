<?php
$db=mysqli_connect('localhost','root','','ecommerce');



 // ////////////////getting ip address////////////////////
function getRealIpAddr(){
 	if(!empty($_SERVER['HTTP_CLIENT-IP']))
 	{
 		$ip=$_SERVER['HTTP_CLIENT_IP'];
 	}
 	elseif(!empty($_SERVER['HTTP_X_FORWARD_FOR']))
 	{
 		$ip=$_SERVER['HTTP_X_FORWARD_FOR'];
 	}
 	else{
  		$ip=$_SERVER['REMOTE_ADDR'];
 	}
 	return $ip;
 }






// /////////////////function add to cart////////////////////////////


function add_cart(){
	global $db;
	if(isset($_GET['add_cart'])){
		$ip=getRealIpAddr();
		$p_id=$_GET['add_cart'];
		$qty=$_POST['product_qty'];
		$size=$_POST['product_size'];
		$check_cart="select * from cart WHERE ip_address='$ip' AND p_id='$p_id'";
		$run_check=mysqli_query($db,$check_cart);
		if(mysqli_num_rows($run_check)>0){
			echo "<script>alert('This product is already added in cart')</script>";

			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";
}
else{
	     $insert_cart="insert into cart(p_id,ip_address,Quantity,size)values('$p_id','$ip','$qty','$size')";
	     $run_cart=mysqli_query($db, $insert_cart);

			echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

}

       


	}
}



 ///////////////////////////// total numbers of items///////////////////////////



 // item count//////////
 function total_items(){
 	global $db;
 	$ip_add=getRealIpAddr();
    $get_items="select * from cart WHERE ip_address='$ip_add'";
    $run_items= mysqli_query($db, $get_items);
    $count_itms= mysqli_num_rows($run_items);
    echo $count_itms;

    }

 // getting total price from cart////////
  function total_price(){
  	global $db;
     $total=0;
	 $ip_add=getRealIpAddr();
	 $selected="select * from cart where ip_address='$ip_add'";
	 $query= mysqli_query($db, $selected);
	 
	 while ($fet=mysqli_fetch_array( $query)){
	 	$p_id= $fet['p_id'];
	 	$p_qty=$fet['Quantity'];
	 	$sele= "select * from products where product_id='$p_id'";
	 	$qu= mysqli_query($db,$sele);
	
         while($r=mysqli_fetch_array($qu)){
         	$sub_total=$r['product_price']*$p_qty;
         	$total+=$sub_total;
         }
}

echo $total;

 }











// /////////////////geeting all products////////////////////////////

function get_all_products(){
	global $db;
	$get_pro="select * from products ORDER BY 1 DESC LIMIT 0,6";
	$run_pro=mysqli_query($db,$get_pro);
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
        $pro_desc=$row_pro['product_desc'];
         $pro_img1=$row_pro['product_img1'];
         
         echo "
         <div class='col-sm-3 single'>
	<div class='product'style='width: 270px; height: 450px; box-sizing: border-box;''>
		
		<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1'style='margin-left:-10px; width: 250px; height: 200px;'' class='img-responsive'></a>
		<div class='text'>
			<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
			<p class='price' style='color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;'
	'> PKR $pro_price </p>
			<p class='buttons'style='margin-left: 20px; margin-bottom: 20px;'>
				<a href='details.php?pro_id=$pro_id' class='btn btn-sm  btn-default'style='margin-left:-20px;'> View Details</a>
				<a href='details.php?pro_id=$pro_id' class='btn btn-sm  btn-primary' style='margin-left:80px; margin-top: -30px;'><i class='fa fa-shopping-cart'></i>Add to cart</a>

			</p>
		</div> <!-- text -->
	</div> <!-- product -->
	
</div> <!-- col -->
        ";}
}













 // getting all product cateogries//////////////////////-->
function getPcats(){
	global $db;
	$get_p_cats="select * from product_cateogries";
	$run_p_cat=mysqli_query($db,$get_p_cats);
	while($row_p_cats=mysqli_fetch_array($run_p_cat)){
		$p_cat_id=$row_p_cats['p_cat_id'];
		$p_cat_title=$row_p_cats['p_cat_title'];
		?>
		<li style=" margin-bottom: 10px;"><a style="font-weight: bold; text-transform: uppercase;" href="shop.php?p_cat=<?php echo $p_cat_id;?>"><?php echo $p_cat_title;?></a></li>

		<?php

	}
}












 ////////////////// geeting cateogries/

function getCats(){
	global $db;
	$get_cats="select * from cateogries";
	$run_cat=mysqli_query($db,$get_cats);
	while($row_cats=mysqli_fetch_array($run_cat)){
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		?>
		<li style=" margin-bottom: 10px;"><a style="font-weight: bold; text-transform: uppercase;" href="shop.php?cat_id=<?php echo $cat_id;?>"><?php echo $cat_title;?></a></li>

		<?php

	}
}










// getting product cat onclick//////////////////

function getPcatPro(){
	global $db;
	if(isset($_GET['p_cat'])){
		$p_cat=$_GET['p_cat'];
		$get_p_catss="select * from product_cateogries WHERE p_cat_id='$p_cat'";
		$run_p_cat=mysqli_query($db,$get_p_catss);
		$row_p_cat=mysqli_fetch_array($run_p_cat);
		$p_cat_title=$row_p_cat['p_cat_title'];
		$p_cat_desc=$row_p_cat['p_cat_desc'];

		$get_pro="select * from products WHERE p_cat_id='$p_cat'";
		$run_pro=mysqli_query($db,$get_pro);
		$count=mysqli_num_rows($run_pro);
		if($count==0){
			echo "
			<div class='box'>
		<h1>No Product Found In this Product Cateogry</h1>
		
	</div>
";

}
else{
	echo "
			<div class='box'>
		<h1>$p_cat_title</h1>
		<p>$p_cat_desc</p>
	</div> <!-- box -->
";

}


while($row_pro=mysqli_fetch_array($run_pro)){
	$pro_id=$row_pro['product_id'];
	$pro_title=$row_pro['product_title'];
	$pro_price=$row_pro['product_price'];
	$pro_desc=$row_pro['product_desc'];
    $pro_img1=$row_pro['product_img1'];

     echo "
                     <div class='col-md-4 col-sm-6 center-responsive'>
			<div class='product'style='width: 270px; height: 430px; box-sizing: border-box;'>
				<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='img-responsive' style='margin-left:-10px; width: 250px; height: 200px;'></a>
				<div class='text'>
					<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
					<p class='price' style='color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;'>INR $pro_price </p>
					<p class='buttons'style='margin-left: 20px; margin-top:30px;'>
						<a href='details.php?pro_id=$pro_id' class='btn btn-default'style='margin-left:-35px; margin-bottom: -20px;'>View Details</a>
						<a href='details.php?pro_id=$pro_id' class='btn btn-primary'style='margin-left:72px; margin-top: -10px;'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</p>
				</div> <!-- text -->

			</div> <!-- product -->

		</div><!--  col -->

                     ";
}





	}
}













 // ////////////////////getting specific cats 




function getspecificcats(){
	global $db;
	if(isset($_GET['cat_id'])){
		$cat_id=$_GET['cat_id'];
		$get_catss="select * from cateogries WHERE cat_id='$cat_id'";
		$run_cat=mysqli_query($db,$get_catss);
		$row_cat=mysqli_fetch_array($run_cat);
		$cat_title=$row_cat['cat_title'];
		$cat_desc=$row_cat['cat_desc'];

		$get_pro="select * from products WHERE cat_id='$cat_id'";
		$run_pro=mysqli_query($db,$get_pro);
		$count=mysqli_num_rows($run_pro);
		if($count==0){
			echo "
			<div class='box'>
		<h1>No Product Found In this Product Cateogry</h1>
		
	</div>
";

}
else{
	echo "
			<div class='box'>
		<h1>$cat_title</h1>
		<p>$cat_desc</p>
	</div> <!-- box -->
";

}


while($row_pro=mysqli_fetch_array($run_pro)){
	$pro_id=$row_pro['product_id'];
	$pro_title=$row_pro['product_title'];
	$pro_price=$row_pro['product_price'];
	$pro_desc=$row_pro['product_desc'];
    $pro_img1=$row_pro['product_img1'];

     echo "
                     <div class='col-md-4 col-sm-6 center-responsive'>
			<div class='product'style='width: 270px; height: 430px; box-sizing: border-box;'>
				<a href='details.php?pro_id=$pro_id'><img src='admin_area/product_images/$pro_img1' class='img-responsive' style='margin-left:-10px; width: 250px; height: 200px;'></a>
				<div class='text'>
					<h4><a href='details.php?pro_id=$pro_id'>$pro_title</a></h4>
					<p class='price' style='color:lightgreen; font-size: 18px !important;text-align: center !important;font-weight: 300;'>INR $pro_price </p>
					<p class='buttons'style='margin-left: 20px; margin-top:30px;'>
						<a href='details.php?pro_id=$pro_id' class='btn btn-default'style='margin-left:-35px; margin-bottom: -20px;'>View Details</a>
						<a href='details.php?pro_id=$pro_id' class='btn btn-primary'style='margin-left:72px; margin-top: -10px;'><i class='fa fa-shopping-cart'></i>Add to cart</a>
					</p>
				</div> <!-- text -->

			</div> <!-- product -->

		</div><!--  col -->

                     ";
}





	}
}











?>


















