

<?php

if(!isset($_SESSION['admin_email'])){
   echo"<script>window.open('login.php','_self')</script>";
}
else{

?>
<div class="row" style="margin-top: 20px;">
	<div class="col-lg-12">
		<h1 class="page-header">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">
				<i class="fa fa-dashboard"></i>Dashboard
			</li>
			
		</ol>
	</div> <!-- col 12 -->

</div> <!-- row  one ending -->







 <!--/////////////// row  two starting ////////////////-->




         <div class="row">
         	<div class="col-lg-3 col-md-6">
         		<div class="card bg-primary">
         			<div class="card-header">
         				<div class="row">
         					<div class="col-xs-3">
         						<i class="fa fa-tasks fa-5x text-white"></i>
         					</div> <!-- xs 3 -->

         					<div class="col-xs-9 "style="margin-left:100px;">
         						<div class="huge text-white    badge badge-pill" style="font-size:25px; line-height: normal;"><?php echo $count_pro;?></div>
                           <div class="text-white">Products</div>
         						

         					</div><!--  col 9 -->
         				</div><!--  row -->
         			</div> <!--  heading -->

         			<a href="index.php?view_product">
         			<div class="card-footer bg-white">
         				<span class="pull-left">View Details</span>
         				<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
         				<div class="clearfix"></div>
         				
         			</div> <!-- footer -->
               </a>
            </div> <!-- primary -->

            
         	</div> <!-- col  -->




<div class="col-lg-3 col-md-6">
               <div class="card bg-success">
                  <div class="card-header">
                     <div class="row">
                        <div class="col-xs-3">
                           <i class="fa fa-comments fa-5x text-white"></i>
                        </div> <!-- xs 3 -->

                        <div class="col-xs-9 text-right" style="margin-left:80px;">
                           <div class="huge text-white badge badge-pill" style="font-size:25px; line-height: normal;"><?php echo $count_cus?></div>
                           <div class="text-white">Customers</div>
                           

                        </div><!--  col 9 -->
                     </div><!--  row -->
                  </div> <!--  heading -->

                  <a href="index.php?view_customer">
                  <div class="card-footer bg-white">
                     <span class="pull-left text-success">View Details</span>
                     <span class="pull-right"><i class="fa fa-arrow-circle-right text-success"></i></span>
                     <div class="clearfix"></div>
                     
                  </div> <!-- footer -->
               </a>
            </div> <!-- primary -->

            
            </div> <!-- col  -->






            <div class="col-lg-3 col-md-6">
               <div class="card bg-warning">
                  <div class="card-header">
                     <div class="row">
                        <div class="col-xs-3">
                           <i class="fa fa-shopping-cart fa-5x text-white"></i>
                        </div> <!-- xs 3 -->

                        <div class="col-xs-9 text-right" style="margin-left:20px;">
                           <div class="huge text-white badge badge-pill" style="font-size:25px; line-height: normal;"><?php echo $count_pro_cat;?></div>
                           <div class="text-white">Product cateogries</div>
                           

                        </div><!--  col 9 -->
                     </div><!--  row -->
                  </div> <!--  heading -->

                  <a href="index.php?view_product_cat">
                  <div class="card-footer bg-white">
                     
                     <span class="pull-left text-warning">View Details</span>
                     <span class="pull-right"><i class="fa fa-arrow-circle-right text-warning"></i></span>
                     <div class="clearfix"></div>
                     
                  </div> <!-- footer -->
               </a>
            </div> <!-- primary -->

            
            </div> <!-- col  -->

            <div class="col-lg-3 col-md-6">
               <div class="card bg-danger">
                  <div class="card-header">
                     <div class="row">
                        <div class="col-xs-3">
                           <i class="fa fa-support fa-5x text-white"></i>
                        </div> <!-- xs 3 -->

                        <div class="col-xs-9" style="margin-left:110px;">
                           <div class="huge text-white badge badge-pill"style="font-size:25px; line-height: normal;"><?php echo $count_cust_order;?></div>
                           <div class="text-white ">Orders</div>
                          
                           

                        </div><!--  col 9 -->
                     </div><!--  row -->
                  </div> <!--  heading -->

                  <a href="index.php?view_order">
                  <div class="card-footer bg-white">
                     <span class="pull-left text-danger">View Details</span>
                     <span class="pull-right text-danger"><i class="fa fa-arrow-circle-right"></i></span>
                     <div class="clearfix"></div>
                     
                  </div> <!-- footer -->
               </a>
            </div> <!-- primary -->

            
            </div> <!-- col  -->

</div> <!-- row 2 ending here ////////// -->

 <!--///////////// row 3 strating her/////////////////////-->

<br><br>
<div class="row">
  <div class="col-lg-9">
     <div class="card">
        
   <div class="card-header bg-primary">
   <h3 class="card-title">
      <i class="fa fa-money"></i>
      New orders

   </h3> <!-- card title -->
   </div> <!-- card header -->

   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered table-hover table-striped" style="margin-right:30px;">
            <thead>
               <tr>
                  <th>Order No:</th>
                  <th>Customer Email:</th>
                  <th>Invoice No:</th>
                  <th>Product Id</th>
                  <th>Total:</th>
                  <th>Date</th>
                  <th>Status</th>
               </tr>

            </thead>

            <tbody>

                <?php

            $i=0;
            $get_order="select * from customer_order order by 1 DESC LIMIT 0,5";
            $run_order=mysqli_query($con,$get_order);
           while($row=mysqli_fetch_array( $run_order)){
            $order_id=$row['order_id'];
            $cust_id=$row['customer_id'];
             $pro_id=$row['product_id'];
            $invoice_no=$row['invoice_no'];
            $qty=$row['Quantity'];
            $size=$row['size'];
            $order_status=$row['order_status'];
            $i++;

            ?>
             <tr>
                  <td><?php echo $i++; ?></td>
                   <td>
                      <?php
                      $select_cus="select * from customers where customer_id='$cust_id'";
                      $run_cus=mysqli_query($con,$select_cus);
                      $row_cus=mysqli_fetch_array($run_cus);
                      $cust_email=$row_cus['customer_email'];
                      echo $cust_email;


                      ?>
                   </td>
                    <td><?php echo $invoice_no;?></td>
                     <td><?php echo $pro_id; ?></td>
                      <td><?php echo $qty;?></td>
                      <td><?php echo $size;?></td>
                      <td><?php echo $order_status;?></td>
               </tr>
            <?php
         }




            ?>
            
              
            </tbody>


           
         </table>
      </div> <!-- table responsive -->
      <div class="text-right">
         <a href="index.php?view_orders">View All orders &nbsp; &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
      </div> <!-- text right -->
 </div> <!-- card-body -->
     </div> <!-- card -->

  </div> <!--  col lg- 8 -->


  <div class="col-md-3">
     <div class="card" style="width: 300px;  line-height:30px;">
         <div class="card-body">
            <div class="thumb-info mb-md">
               <img src="admin_images/<?php echo $admin_image;?>" height="150" width="200">
               <hr>
               <div class="thumb-info-title">
                 <span class="thumb-info-inner"><strong>Name:</strong>&nbsp;&nbsp;&nbsp;<?php echo $admin_name;?></span><br>


                 <span class="thumb-info-type"><strong>Job:</strong>&nbsp;&nbsp;&nbsp;<?php echo $admin_job;?></span></div> <!-- title info thumb -->

            </div> <!--  thumb -->


            <div class="mb-md">
               <div class="widget-content-expanded">
                  <i class="fa fa-user"></i><span><strong>Email:</strong></span><?php echo $admin_email;?> <br>
                  <i class="fa fa-user"></i><span><strong>Country:</strong>&nbsp;&nbsp;</span><?php echo $admin_country;?><br>
                  <i class="fa fa-user"></i><span><strong>Contact:</strong>&nbsp;&nbsp;</span><?php echo $admin_contact;?><br>


               </div> <!-- md xpands -->
               <hr class="dotted-short">
               <h5 class="text-muted"><strong>About</strong></h5>
               <p>
                  <?php echo $admin_about;?>
               </p>
                     


            </div> <!-- weighted -->
     </div> <!-- card -->
  </div> <!-- col md-4-->





</div> <!-- row -->



















<?php
}
?>


















