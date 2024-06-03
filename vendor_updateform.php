<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

  <!-- AdminLTE Skins. We the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

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


  <?php
 require("connection.php");
$Id=$_GET['Id'];
$sql2="select * from vendor where Vendor_Id='$Id'";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
$Id=$a['Vendor_Id'];
$name=$a['Vendor_Name'];
$contactno=$a['Vendor_Contactno'];
$email=$a['Vendor_Email'];
$address=$a['Vendor_Address'];
$gstno=$a['Vendor_GSTNO'];
$servicetaxno=$a['Vendor_ServiceTaxNo'];
$bankdetails=$a['Vendor_BankDetails'];
$productdescription=$a['Vendor_ProductDescription'];
}?>

     <div class="head">
            <div class="title">
                <h2> Vendor Details</h2>
            </div>
     </div><br><br>
     <div class="well">         
             <input class="btn btn-primary" type="submit" value="Add Vendor" id="button"></h4>
             <div class="well" id="tg">
               <form class="form-horizontal" method="POST" action="vendor_insert.php">
                            <div class="row">
                            <div class="form-group">
              
            <!--  <input type="hidden" name="Vendor_Id">-->
            
                             
              <div class="col-sm-3"> 
                         <span hidden=""><input  type="text" name="Product_Id"  value="<?php echo $Id; ?>" "></span>
                        <label for="Name">Name:</label><input class="form-control" value="<?php echo $name; ?>" type="text" name="Vendor_Name">
                             </div>
                             <div class="col-sm-3">
             <label for="Contact_NO">Contactno:</label><input class="form-control" value="<?php echo $contactno; ?>" type="text" name="Vendor_Contactno">
  
                             </div>
                              <div class="col-sm-3">
                        <label for="E_mail">E_mail:</label><input class="form-control" value="<?php echo $email; ?>" type="text" name="Vendor_Email">
                               </div>
                                <div class="col-sm-3">
                        <label for='Address'>Address:</label><input class="form-control" value="<?php echo $address; ?>" type='text' name='Vendor_Address'>
                                  </div>

                             </div>
                           </div>
                               <div class="row">
                            <div class="form-group">
                            
                                   
             <div class="col-sm-3">
            <label for='GST NO.'>GST NO.:</label><input class="form-control" value="<?php echo $gstno; ?>" type='text' name='Vendor_GSTNO'>
              </div>    
              <div class="col-sm-3">    
    <label for='Service Tax No'>Service Tax No:</label><input class="form-control" value="<?php echo $servicetaxno; ?>" type='text' name='Vendor_ServiceTaxNo'>
              </div>
             
             <div class="col-sm-3">                  
        <label for='Bank Details'>Bank Details:</label><input class="form-control" value="<?php echo $bankdetails; ?>" type='text' name='Vendor_BankDetails'>
               </div>
              <div class="col-sm-3">
                 <label for="Product name">Product Description:</label><input class="form-control" value="<?php echo $productdescription; ?>" type="text" name="Vendor_ProductDescription">
               </div></div></div>
                 <input type="submit" name="submit">
  </form></div>
             
   </div>
 
  
</body>

</html>
