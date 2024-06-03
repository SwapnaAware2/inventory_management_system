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
<script type="text/javascript" src="loadmenu.js"></script>
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
</body>
</html>
