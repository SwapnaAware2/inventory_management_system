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
<!-- <script type="text/javascript" src="loadmenu.js"></script> -->
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
<script>
$(document).ready(function(){
  $("#button3").click(function(){
    $("#tg3").toggle();
  });
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
  


  <div class="head">
            <div class="title">
                <h2> Vendor Details</h2>
            </div>
     </div><br><br>
     <div class="well">         
             <input class="btn btn-primary" type="submit" value="Add Vendor" id="button"></h4>
             <input class="btn btn-primary" type="submit" value="Add purchase Details" id="button3"></h4>
             <div class="well" id="tg" hidden>
               <form class="form-horizontal" method="POST" action="vendor_insert.php">
                            <div class="row">
                            <div class="form-group">
              
            <!--  <input type="hidden" name="Vendor_Id">-->
            
                             
              <div class="col-sm-3"> 
               
                        <label for="Name">Name:</label><input class="form-control" type="text" name="Vendor_Name">
                             </div>
                             <div class="col-sm-3">
             <label for="Contact_NO">Contactno:</label><input class="form-control" type="text" name="Vendor_Contactno">
  
                             </div>
                              <div class="col-sm-3">
                        <label for="E_mail">E_mail:</label><input class="form-control" type="text" name="Vendor_Email">
                               </div>
                                <div class="col-sm-3">
                        <label for='Address'>Address:</label><input class="form-control" type='text' name='Vendor_Address'>
                                  </div>

                             </div>
                           </div>
                               <div class="row">
                            <div class="form-group">
                            
                                   
             <div class="col-sm-3">
            <label for='GST NO.'>GST NO.:</label><input class="form-control" type='text' name='Vendor_GSTNO'>
              </div>    
              <div class="col-sm-3">    
    <label for='Service Tax No'>Service Tax No:</label><input class="form-control" type='text' name='Vendor_ServiceTaxNo'>
              </div>
             
             <div class="col-sm-3">                  
        <label for='Bank Details'>Bank Details:</label><input class="form-control" type='text' name='Vendor_BankDetails'>
               </div>
              <div class="col-sm-3">
                 <label for="Product name">Product Description:</label><input class="form-control" type="text" name="Vendor_ProductDescription">
               </div></div></div>
                 <input class="btn btn-primary" type="submit" name="submit" value="Add Vendor">
  </form></div>
             








 <div class="well" id="tg3" hidden>
               <form class="form-horizontal" method="POST" action="vendor_insertforpurchase.php" enctype="multipart/form-data">
                            <div class="row">
                            <div class="form-group">
              
            <!--  <input type="hidden" name="Vendor_Id">-->
            
                             
              <div class="col-sm-3"> 
               
                        <label for="Bill Id">Bill Id:</label><input class="form-control" type="text" name="Bill_Id">
                             </div>
                             <div class="col-sm-3">
<label for="vendor Id">Vendor Id:</label><select class="form-control" name="Vendor_Id"><option value=""></option>
<?php
require("connection.php");
$sql2 = "SELECT Vendor_Id FROM vendor";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
  $Vendor_Id=$a['Vendor_Id'];
  echo"<option>$a[Vendor_Id]</option>";
}
            ?>
 </select>                             </div>
                              <div class="col-sm-3">
                        <label for="Product_Description">Product Description</label><input class="form-control" type="text" name="Product_Description">
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
    <label for='file'>Excel File</label><input class="form-control" type='file' name='file'>
              </div>
              <br>
                 <input class="btn btn-primary" type="submit" name="submit" value="Add purchase Details">
  </form></div>
            
   </div></div>
 
               <div ng-app="sa_display" ng-controller="controller" ng-init="display_data()">

                 <table class="table table-bordered" cellpadding="4" cellspacing="4" border="1" class="display" id="example">
                    <thead>
                         <tr>
                            <tr><th>Id</th>
                            <th>Action</th>
                            <th>Name</th>
                            <th>ProductDescription</th>
                            <th>ContactNo</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>GSTNO</th>
                            <th>ServiceTaxNo</th>
                            </tr> 
                        </tr>
                    </thead>
                   <tbody>
                   <tr ng-repeat="x in names">
                    <td>{{x.Vendor_Id}}</td>
                    <td><input class="btn btn-danger" type='button' ng-click='remove($index,x.Vendor_Id);' value='Delete'>
                      <a class='btn btn-primary' href='vendor_updateform2.php?Id={{x.Vendor_Id}}'>Edit</a></td>
                    <td>{{x.Vendor_Name}}</td>
                    <td>{{x.Vendor_ProductDescription}}</td>
                    <td>{{x.Vendor_Contactno}}</td>
                    <td>{{x.Vendor_Email}}</td>
                    <td>{{x.Vendor_Address}}</td>
                    <td>{{x.Vendor_GSTNO}}</td>
                    <td>{{x.Vendor_ServiceTaxNo}}</td>
                   

</tr>
                    </tbody>
                </table>
        </div>
   






  
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
                url: 'vendor_display.php',
                data: {request_type:1},

            }).then(function successCallback(response) {
                $scope.names = response.data;
            });

            // Delete record
            $scope.remove = function(index,Vendor_Id){
                if (confirm('Are you sure you want to delete this?')){
               
                $http({
                method: 'post',
                url: 'vendor_display.php',
                data: {Vendor_Id:Vendor_Id,request_type:2},
                }).then(function successCallback(response) {
                    $scope.names.splice(index, 1);
                    $scope.status = "The vendor Deleted Successfully!!!";
                }); 
            }}

            
        }]);

        </script>
     

</body>
</html>
