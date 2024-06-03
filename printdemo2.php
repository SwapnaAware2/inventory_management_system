<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>



   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Thank you</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>

<script>
$(document).ready(function(){
  $("#button").click(function(){
    $("#tg").toggle();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#button2").click(function(){
    $("#tg2").toggle();
  });
});
</script>
</head>
<body>
    <div class="main container">
    <br>
    <br>
    <br>
<form id="form1">
    <div id="dvContainer">
 
 <?php
           if (isset($_POST['submit'])) {
           require("connection.php");
           $Name=$_POST['Name'];
           $sql2 = "SELECT * FROM customer where Customer_Name='$Name'";
           $res = mysqli_query($conn, $sql2);
           while($a=mysqli_fetch_assoc($res))
           {
            $date=date("y-m-d");
            $Name=$a['Customer_Name'];
            $Contact_No=$a['Customer_Contact_No'];

?>
     <div class="head">
            <div class="title">
                <h2>Inventory</h2>
                <div class="row">
                  <div class="col-sm-8">
                   <h3>Bill_no:<?php $c=0;
                     echo date('y').date('m').date('d').$a['Customer_Id'];
                     $c++;
                    ?></h3>
                  </div>
                   <div class="col-sm-4">
             <?php  echo"<h4>Date:$date</h4>"; ?>
                   </div>
                </div>
                <div class="row">
                  <div class="col-sm-8">
                 <?php   echo"<h4>Name:$a[Customer_Name]</h4>";  ?>
                  </div>
                   <div class="col-sm-4">
              <?php echo"<h4>Contact_No:$a[Customer_Contact_No]</h4>";  ?>
                   </div>
                </div>
            </div>
     </div>

<?php
            }}
           ?>



     <div class="well">






         <div ng-app="sa_display" ng-controller="controller" ng-init="display_data()">
                 <table class="table table-bordered" cellpadding="4" cellspacing="4" border="1" class="display" id="example">
                    <thead>
                         <tr>
                            <th>Code</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Rate</th>
                            <th>Amuont</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr ng-repeat="x in names">
                      <td>{{x.Product_Code}}</td>
                      <td>{{x.Product_Name}}</td>
                      <td>{{x.Product_Quantity}}</td>
                      <td>{{x.Product_MRP}}</td>
                      <td>{{x.Product_Amount}}</td>
                       <td ng-init="$parent.total = $parent.total + (x.Product_Amount * 1)" hidden></td>
                    </tr>
                      <tr>
                        
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Subtotal</th>
                        <th>${{ total }}</th>
                      </tr>
                       <tr>
                       
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>GST</th>
                        <th>{{ total / 11}}</th>
                      </tr>
                       <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Discount</th>
                        <th>{{ total * (0.1)}}</th>
                      </tr>
                       <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th>Total</th>
                        <th>{{ total +(total / 11) - (total * (0.1))}}</th>
                      </tr>
                    </tbody>
                </table>
                 <!-- <input type="submit" class="btn btn-primary" name="sub"  value="PrintBill"> -->
                     <input type="button" class="btn btn-primary" value="Print Bill" id="btnPrint" />
        </div>
        
 </div>
</div>

 </div>

</form>


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






