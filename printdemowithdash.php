<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- <script type="text/javascript">
    function bill(){
    jQuery(function($){
    $('#mydiv45').load('bill.html');
   });}
      function stock(){
    jQuery(function($){
    $('#mydiv45').load('stock.html');
   });}
      function vendor1(){
    jQuery(function($){
    $('#mydiv45').load('vendor1.html');
   });}
</script> -->



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
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini" id="page">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
<?php include 'header3.html'; ?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <?php include 'left_panel.html'; ?>
     </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  

  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <!-- This ul for image animation -->
   

    <!-- Main content -->
      <!-- Main row -->

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
<div>
  
 

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



 <div class="well" id="tg3" >
               <form class="form-horizontal" method="POST" action="bill_insertforsale.php" enctype="multipart/form-data">
                            <div class="row">
                            <div class="form-group">
              
            <!--  <input type="hidden" name="Vendor_Id">-->
            
                             
              <div class="col-sm-3"> 
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
               
                        <label for="Bill Id">Bill Id:</label><input class="form-control" type="text" name="Bill_Id" value="<?php
                     echo date('y').date('m').date('d').$a['Customer_Id'];
                    ?>">
                             </div>
                             <div class="col-sm-3">
<label for="Customer_No">Customer_No:</label><input class="form-control" type="text" name="Customer_Contact_No" value="<?php echo $a['Customer_Contact_No']; ?>"> <?php }} ?>   
                             </div>
                             <div class="col-sm-3">
                        <label for='Payment_Mode'>Payment Mode:</label><select class="form-control" name="Payment_Mode"><option value="">Select</option><option value="Online">Online</option><option value="Cash">Cash</option>
                                  </select>
                                  </div>
                             </div>
                           </div>
                               <div class="row">
                            <div class="form-group">
                            
                                   
             <div class="col-sm-3">
            <label for='Amount'>Amount</label><input class="form-control" type='text' name='Amount'>
              </div>    
              <div class="col-sm-3">    
    <label for='file'>Pdf File</label><input class="form-control" type='file' name='file'>
              </div>
              <br>
                 <input class="btn btn-primary" type="submit" name="submit" value="Add sale Details">
  </form></div>




</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <!-- Default to the left -->
      <?php include 'footer.html'; ?> 
    

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript::;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
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
