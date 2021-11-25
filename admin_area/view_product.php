
<div class="row">
	<div class="col-lg-12">

		<ul class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard / View Product
			</li>
			</ul>

	</div> <!-- col -->

</div><!--  row 1st ending -->





<div class="row">
	<div class="col-lg-12">
		
		<div class="card">
			<div class="card-header">
	    		<h3 class="card-title">
	    			<i class="fa fa-money"></i>&nbsp;&nbsp;View Products
	    		</h3>
	    	</div> <!-- heading -->
	    <div class="card-body">
	    	<div class="table-responsive">
	    		<table class="table table-bordered table-hover table-striped">
	    			<thead>
	    				<tr>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Id</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product title</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Image</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Price</th>
	    					
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Keyword</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Date</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Delete</th>
	    					<th class="bg-primary text-white" style="border:2px solid white;" >Product Edit</th>
                        </tr>
	    			</thead>

	    			<tbody>
	    				<?php
	    				$i=0;
	    				$get_pro="select * from products";
	    				$run_pro=mysqli_query($con,$get_pro);
	    				while($row_pro=mysqli_fetch_array($run_pro)){
	    					$pro_id=$row_pro['product_id'];
	    					$pro_title=$row_pro['product_title'];
	    					$pro_image=$row_pro['product_img1'];
	    					$pro_price=$row_pro['product_price'];
	    					$pro_date=$row_pro['date'];
	    					$pro_keyword=$row_pro['product_keyword'];
	    					$pro_id=$row_pro['product_id'];
	    					$i++;
	    					?>
	    					<tr>
	    						<td><?php echo $i;?></td>
	    						<td><?php echo $pro_title;?></td>
	    						<td><img src="product_images/<?php echo $pro_image;?>"width="50" height="50"></td>
	    						<td><?php echo 	$pro_price;?></td>
	    						<td><?php echo $pro_keyword?></td>
	    						<td><?php echo $pro_date?></td>
	    						<td>
	    							<a href="index.php?delete_product=<?php echo $pro_id;?>"><i class="fa fa-trash"></i>&nbsp;Delete</a>
	    						</td>
	    						<td>
	    							<a href="index.php?edit_product=<?php echo $pro_id?>"><i class="fa fa-edit"></i>Edit</a>
	    						</td>
	    						

	    						
	    						
	    					</tr>

	    					<?php

	    				}





	    				?>
	    			</tbody>
	    			
	    		</table>
	    	</div>

         </div> <!-- body	 -->

		</div> <!-- card -->
	</div> <!-- col -->


</div><!--  row two ending -->









