
<!DOCTYPE html>
<html>
<head>
	<title>Insert Product.php</title>
	 <meta charset="utf-8">
	  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="breadcrumb">
				
				<li class="active">
					<i class="fa fa-dashboard"></i>
					Dashboard Insert Product
				</li>
			</div>
		</div> <!-- lg -->
	</div> <!-- row -->


	<div class="row">
		<div class="col-lg-3">
			
		</div><!--  col 3 -->
		<div class="col-lg-6">
			
<div class="card">
	
<div class="card-heading">
	
<h3>
	<i class="fa fa-money da-wa"></i>Insert Product
</h3>

</div> <!-- heading -->


<div class="card-body">
	
<form class="form-horizontal" method="post" enctype="multipart/form-data">
	
<div class="form-group">
	<label class="col-md-3">Product title</label>
	<input type="text" name="product_name" class="form-control" required>


</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Product cateogries</label>
		<select class="form-control" name="product_cat" required>
			
			<option>Select From cateogries</option>
               <?php   

 $get_cats="select * from  product_cateogries";
 $run=mysqli_query($con,$get_cats);
 while($row=mysqli_fetch_array( $run)){
 	$id=$row['p_cat_id'];
 	$cat_title=$row['p_cat_title'];

 	?>


 	<option value="<?php echo $id ?>"><?php echo $cat_title ?></option>

 	<?php

 }


?>
</select>
</div><!--  cform-group -->


<div class="form-group">
		<label class="col-md-3 control-label">Cteogries</label>
		<select class="form-control" name="cat" required>
			
			<option>Select Cateogries</option>
               <?php   

 $get_cats="select * from cateogries";
 $run=mysqli_query($con,$get_cats);
 while($row=mysqli_fetch_array( $run)){
 	$id=$row['cat_id'];
 	$cat_title=$row['cat_title'];
 	?>
 	<option value="<?php echo $id ?>"><?php echo $cat_title ?></option>

 	<?php

 }

?>
</select>
</div><!--  cform-group -->



<div class="form-group">
	<label class="col-md-3">Product image 1</label>
	<input type="file" name="product_img1" class="form-control" required>


</div>
<div class="form-group">
	<label class="col-md-3">Product image 2</label>
	<input type="file" name="product_img2" class="form-control" required>


</div>
<div class="form-group">
	<label class="col-md-3">Product image 3</label>
	<input type="file" name="product_img3" class="form-control" required>


</div>
<div class="form-group">
	<label class="col-md-3">Product Price</label>
	<input type="number" name="product_price" class="form-control"required>


</div>
<div class="form-group">
	<label class="col-md-3">Product Keyword</label>
	<input type="text" name="product_keyword" class="form-control" required> 


</div>


<div class="form-group">
	<label class="col-md-3">Product Discription</label>
	<textarea name="product_desc" class="form-control" cols="19" rows="6" required></textarea>


</div>


<div class="form-group">
	
	<input type="submit" value="Insert Product" name="submit" class=" btn btn-primary form-control">


</div> <!-- form group -->









	



</form>

</div> <!-- body -->






</div> <!-- card -->
		</div> <!-- log -->
		<div class="col-lg-3">
	


</div> <!-- col lg 3 -->
	</div> <!-- row -->
</div> <!-- container -->



</body>
</html>

<?php
if(isset($_POST['submit'])){
$product_title=$_POST['product_name'];
$product_cat=$_POST['product_cat'];
$cats=$_POST['cat'];
$product_price=$_POST['product_price'];
$product_desc=$_POST['product_desc'];
$product_keyword=$_POST['product_keyword'];

$img1_name=$_FILES['product_img1']['name'];	
$img2_name=$_FILES['product_img2']['name'];
$img3_name=$_FILES['product_img3']['name'];

$img1_tmp=$_FILES['product_img1']['tmp_name'];
$img2_tmp=$_FILES['product_img2']['tmp_name'];
$img3_tmp=$_FILES['product_img3']['tmp_name'];

move_uploaded_file($img1_tmp,"product_images/check/$img1_name");
move_uploaded_file($img2_tmp, "product_images/check/$img2_name");
move_uploaded_file($img3_tmp, "product_images/check/$img3_name");

$insert_query="insert into products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,	product_img3,product_price,product_desc,product_keyword)values('$product_cat','$cats',NOW(),'$product_title','$img1_name','$img2_name','$img3_name','$product_price','$product_desc','$product_keyword')";
$run_query=mysqli_query($con,$insert_query);
if($run_query){
	echo "<script>alert('Product inserted successfully..!')</script>";
	echo "<script>window.open(index.php?insert_product,_self)</script>";
}

}

?>














