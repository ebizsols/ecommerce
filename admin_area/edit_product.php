<?php
if(isset($_GET['edit_product'])){
	$edit_id=$_GET['edit_product'];
	$update="select * from products WHERE product_id='$edit_id'";
	$run=mysqli_query($con,$update);
	$row=mysqli_fetch_array($run);
	$p_id=$row['product_id'];
	$p_title=$row['product_title'];
	$p_cat_id=$row['p_cat_id'];
	$cat_id=$row['cat_id'];
	$p_price=$row['product_price'];
	$p_keyword=$row['product_keyword'];
	$p_desc=$row['product_desc'];
	$p_img1=$row['product_img1'];
	$p_img2=$row['product_img2'];
	$p_img3=$row['product_img3'];



	$select_p_cat="select * from product_cateogries WHERE p_cat_id='$p_cat_id'";
	$run_p_cat=mysqli_query($con,$select_p_cat);
	$row_p_cat=mysqli_fetch_array($run_p_cat);
	$p_cat_title=$row_p_cat['p_cat_title'];

	$select_cat="select * from cateogries WHERE cat_id='$cat_id'";
	$run_cat=mysqli_query($con,$select_cat);
	$row_cat=mysqli_fetch_array($run_cat);
	$cat_title=$row_cat['cat_title'];



}







?>










<!DOCTYPE html>
<html>
<head>
	<title>Edit Product.php</title>
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
					Dashboard / Edit Product
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
	<i class="fa fa-money da-wa"></i>Edit Products
</h3>

</div> <!-- heading -->


<div class="card-body">
	
<form class="form-horizontal" method="post" enctype="multipart/form-data">
	
<div class="form-group">
	<label class="col-md-3">Product title</label>
	<input type="text" name="product_name" value="<?php echo $p_title;?>" class="form-control" required>


</div>
	<div class="form-group">
		<label class="col-md-3 control-label">Product cateogries</label>
		<select class="form-control" name="product_cat" required>
			
			<option >Select From cateogries</option>
               <?php   

 $get_cats="select * from  product_cateogries";
 $run=mysqli_query($con,$get_cats);
 while($row=mysqli_fetch_array( $run)){
 	$p_cat_id=$row['p_cat_id'];
 	$p_cat_title=$row['p_cat_title'];

 	?>


 	<option value="<?php echo $p_cat_id?>"><?php echo $p_cat_title;?></option>

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
 	<option value="<?php echo $cat_id ?>"><?php echo $cat_title ?></option>

 	<?php

 }

?>
</select>
</div><!--  cform-group -->



<div class="form-group">
	<label class="col-md-3">Product image 1</label>
	<input type="file" name="product_img1" class="form-control" required>
   <img src="product_images/<?php echo $p_img1;?>" width="70" height="70">

</div>
<div class="form-group">
	<label class="col-md-3">Product image 2</label>
	<input type="file" name="product_img2" class="form-control" required>
	<img src="product_images/<?php echo $p_img2;?>" width="70" height="70">


</div>
<div class="form-group">
	<label class="col-md-3">Product image 3</label>
	<input type="file" name="product_img3" class="form-control" required><br>
	<img src="product_images/<?php echo $p_img3;?>" width="70" height="70">


</div>
<div class="form-group">
	<label class="col-md-3">Product Price</label>
	<input type="number" name="product_price" value="<?php echo $p_price;?>" class="form-control"required>


</div>
<div class="form-group">
	<label class="col-md-3">Product Keyword</label>
	<input type="text" name="product_keyword" value="<?php echo $p_keyword;?>" class="form-control" required> 


</div>


<div class="form-group">
	<label class="col-md-3">Product Discription</label>
	<textarea name="product_desc" class="form-control" cols="19" rows="6" required><?php echo $p_desc;?></textarea>


</div>


<div class="form-group">
	
	<input type="submit" value="Update Product" name="update" class=" btn btn-primary form-control">


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
if(isset($_POST['update'])){
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

$insert_query="update products set p_cat_id='$product_cat',cat_id='$cats',date=NOW(),product_title='product_title',product_img1='$img1_name',product_img2='$img2_name',product_img3='$img3_name',product_price='$product_price',product_desc='$product_desc',product_keyword='$product_keyword' WHERE product_id='$p_id'";

$run_query=mysqli_query($con,$insert_query);
if($run_query){
	echo "<script>alert('Product has been updated successfully..!')</script>";
	echo "<script>window.open(index.php?view_product,_self)</script>";
}

}

?>














