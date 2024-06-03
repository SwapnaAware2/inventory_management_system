<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- AdminLTE Skins. We the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


</head>
<body>

    <section class="content-header">
      <h1>
       Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product</li>
      </ol>
    </section>

<!-- Left Pane End -->
  
<!-- Product Page code -->
     <?php
 require("connection.php");
$Product_Id=$_GET['Product_Id'];
$sql2="select * from product where Product_Id='$Product_Id'";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
$Product_Id=$a['Product_Id'];
$Product_Code=$a['Product_Code'];
$Product_Name=$a['Product_Name'];
$Product_Category=$a['Product_Category'];
$Product_Subcategory=$a['Product_Subcategory'];
$Product_Size=$a['Product_Size'];
$Product_Quantity=$a['Product_Quantity'];
$Product_Buying_Price=$a['Product_Buying_Price'];
$Product_Selling_Price=$a['Product_Selling_Price'];
$Product_Brand=$a['Product_Brand'];
}?>
     <div class="well">


            <input class="btn btn-primary" type="submit" name="submit" value="Add Product" id="button">



<div class="well">
  <form class="form-horizontal" method="post" action="product_update.php">
      <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
                 <span hidden=""><input type="text" name="Product_Id"  value="<?php echo $Product_Id; ?>" "></span>
                <label for='Product_Code'>Code</label><input class="form-control" value="<?php echo $Product_Code; ?>" type='text' name='Product_Code'>   
            </div>
            <div class="col-sm-3">
                <label for='Product_Name'>Name</label><input class="form-control" value="<?php echo $Product_Name; ?>" type='text' name='Product_Name'>
            </div>
            <div class="col-sm-3">
                <label for='Product_Brand'>Brand</label><input class="form-control" value="<?php echo $Product_Brand; ?>" type='text' name='Product_Brand'>
            </div>
            <div class="col-sm-3">
                 <label for='Product_Category'>Category</label><input class="form-control" value="<?php echo $Product_Category; ?>" type='text' name='Product_Category'> 
            </div>    
        </div>
    </div>
                 
    <div class="row">
      <div class="form-group">
        <div class="col-sm-3">
          <label for='Product_Subcategory'>Subcategory</label><input class="form-control" value="<?php echo $Product_Subcategory; ?>" type='text' name='Product_Subcategory'>  
        </div>
        <div class="col-sm-3">
          <label for='Product_Size'>Size</label><input class="form-control" value="<?php echo $Product_Size; ?>" type='text' name='Product_Size'>  
          </div>
        <div class="col-sm-3">
            <label for='Product_Quantity'>Quantity</label><input class="form-control" value="<?php echo $Product_Quantity; ?>" type='text' name='Product_Quantity' >
        </div>
        <div class="col-sm-3">
            <label for='Product_Buying_Price'>Buying Price</label><input class="form-control" value="<?php echo $Product_Buying_Price; ?>" type='text' name='Product_Buying_Price' >
        </div>
        <div class="col-sm-3">
            <label for='Product_Selling_Price'>Selling Price</label><input class="form-control" value="<?php echo $Product_Selling_Price; ?>" type='text' name='Product_Selling_Price' >
        </div>
      </div>
    </div>                    
     
                  
              <div>
                <span style="margin-left: 90%"><input  name='submit' class='btn btn-primary' type='submit' value='Add Product'></span>  
              </div>
  </form>          
</div>
        
 </div>


<!-- product Page code end -->





     
  <!-- /.content-wrapper -->

<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

</body></html>


