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
<script>
$(document).ready(function(){
  $("#button3").click(function(){
    $("#tg3").toggle();
  });
});
</script>

</head>
<body>


     <div class="head">
            <div class="title">
                <h2>Bill</h2>
            </div>
     </div>
  

 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h4>Enter Code:<input type="text" name="Product_Code">&nbsp
            <input class="btn btn-primary" type="submit" name="submit" value="Add Product" id="button2"></h4>
 
</form>





 <?php
if (isset($_POST["submit"]))
{
 $Product_Code=$_POST['Product_Code'];
 require("connection.php");
//$sql2 = "SELECT id,Name,Code,Size,Category,Selling_price,Buying_Price FROM product2 where Code='$Code'";
 $sql2 = "SELECT * FROM product where Product_Code='$Product_Code'";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
    $Product_Name=$a['Product_Name'];
    $Product_Code=$a['Product_Code'];
    $Product_Brand=$a['Product_Brand'];
    $Product_Category=$a['Product_Category'];
    $Product_Subcategory=$a['Product_Subcategory'];
    $Product_Size=$a['Product_Size'];
    $Product_Quantity=$a['Product_Quantity'];
    // $Product_Buying_Price=$a['Product_Buying_Price'];
    $Product_Selling_Price=$a['Product_Selling_Price'];
 

               ?>





<div class="well">
  <form class="form-horizontal" action="bill_insert.php" method="post">
                       
    
                   <div class="row">
                        <div class="form-group">
                        <div class="col-sm-3">
                        <label for='Product_Code'>Code</label><input class="form-control" value="<?php echo $Product_Code;?>" type='text' name='Product_Code'>   
                       </div>
                      <div class="col-sm-3">
                        <label for='Product_Name'>Product Name</label><input class="form-control" value="<?php echo $Product_Name; ?>" type='text' name='Product_Name'>
                      </div>
                         <div class="col-sm-3">
                        <label for='Product_Brand'>Brand</label><input class="form-control" value="<?php echo $Product_Brand; ?>" type='text' name='Product_Brand'>
                        </div>
                         <div class="col-sm-3">
                        <label for='Product_Size'>Size</label><input class="form-control" value="<?php echo $Product_Size; ?>" type='text' name='Product_Size'>  
                         </div>
                    </div>
                 </div>
                 <div class="row">
                 <div class="form-group">
                   <div class="col-sm-3">
                        <label for='Product_Category'>Category</label><input class="form-control" value="<?php echo $Product_Category; ?>" type='text' name='Product_Category'>
                    </div>
                   <div class="col-sm-3">
                        <label for='SubCategory'>SubCategory</label><input class="form-control" 
                        value="<?php echo $Product_Subcategory; ?>" type='text' name='Code'>  
                   </div> 
                    <div class="col-sm-3">
                        <label for='Product_Selling_Price'>MRP</label><input class="form-control" value="<?php echo $Product_Selling_Price; ?>" type='text' name='Product_Selling_Price'>
                    </div>
                    <div class="col-sm-3">
                        <label for='Product_Quantity'>Quantity</label><input class="form-control" value="1" type='text' name='Product_Quantity' >
                    </div>
                   
                </div>
                </div>
               <div class="row">
                 <div class="form-group">
            <span style="margin-left: 90%"><input  name='submit' class='btn btn-primary' class="form-control" type='submit' value='Add Product'></span>  
                 </div>
               </div>
  </form>          
</div>

 <?php }} ?>

           <div ng-app="sa_display" ng-controller="controller" ng-init="display_data()">
                 <table class="table table-bordered" cellpadding="4" cellspacing="4" border="1" class="display" id="example">
                    <thead>
                           <tr>
                            <th>Code</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>MRP</th>
                            <th>Amuont</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr ng-repeat="x in names">
                      <td>{{x.Product_Code}}</td>
                      <td>{{x.Product_Name}}</td>
                      <td>{{x.Product_Quantity}}</td>
                      <td>{{x.Product_MRP}}</td>
                      <td>{{x.Product_Amount}}</td>
                      <td><input class="btn btn-danger" type='button' ng-click='remove($index,x.Bill_Id);' value='Delete'></td>
                    </tr>
                    </tbody>
                </table>
        </div>



  <form method="post" action="printdemo.php">
  <br>&nbsp &nbsp<h4>Customer Name:<select name="Name"><option value=""></option>
<?php
require("connection.php");
$sql2 = "SELECT Customer_Name FROM customer";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
  $Customer_Name=$a['Customer_Name'];
  echo"<option>$a[Customer_Name]</option>";
}
            ?>
 </select>
 <input class="btn btn-primary" type="submit" name="submit" value="print"></h4>
 </form>
           <input class="btn btn-primary" type="submit" value="New Customer" id="button3"></h4>



              <div class="well" id="tg3" hidden>
              <form class="form-horizontal" method="post" action="customer_insert.php">
                        <div class="form-group">
                        <div class="row">
                        <div class="col-sm-3">
                        <label for="Customer_Name">Name</label><input class="form-control" type="text" name="Customer_Name">
                        </div>
                        <div class="col-sm-3">
                        <label for="Customer_Contact_No">Contact_No</label><input class="form-control" type="text" name="Customer_Contact_No">
                        </div>
                        <div class="col-sm-3">
                        <label for="Customer_Email">Email</label><input class="form-control" type="text" name="Customer_Email">
                        </div>
                        </div>
                        <br>
                        <div class="row">
                          <div class="col-sm-7"></div>
                         <div class="col-sm-5">
                       <input name="submit" class="btn btn-primary" type="submit" value="Add Coustomer">
                     </div></div>
                      </div>
              </form>
              </div>

<script>
        var fetch = angular.module('sa_display', []);

        fetch.controller('controller', ['$scope', '$http', function ($scope, $http) {

            // Get all records
            $http({
                method: 'post',
                url: 'bill_display.php',
                data: {request_type:1},

            }).then(function successCallback(response) {
                $scope.names = response.data;
            });

            // Delete record
            $scope.remove = function(index,Bill_Id){
                if (confirm('Are you sure you want to delete this?')){
               
                $http({
                method: 'post',
                url: 'bill_display.php',
                data: {Bill_Id:Bill_Id,request_type:2},
                }).then(function successCallback(response) {
                    $scope.names.splice(index, 1);
                    $scope.status = "The Product Deleted Successfully!!!";
                }); 
            }}
            //print bill
            //  $scope.print = function(Bill_Id){
            //     if (confirm('Are you sure you want to print this?')){
               
            //     $http({
            //     method: 'post',
            //     url: 'bill_display.php',
            //     data: {Bill_Id:Bill_Id,request_type:3},
            //     }).then(function successCallback(response) {
            //         $scope.names.splice(index, 1);
            //         $scope.status = "The Product Deleted Successfully!!!";
            //     }); 
            // }}

            
        }]);

        </script>

      </body>
      </html>
