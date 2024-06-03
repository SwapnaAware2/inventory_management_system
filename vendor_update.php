<?php
if(isset($_POST['submit']))
{
require("connection.php");
$Id=$_POST['Vendor_Id'];
$Vendor_Name=$_POST['Vendor_Name'];
$Vendor_Contactno=$_POST['Vendor_Contactno'];
$Vendor_Email=$_POST['Vendor_Email'];
$Vendor_Address=$_POST['Vendor_Address'];
$Vendor_GSTNO=$_POST['Vendor_GSTNO'];
$Vendor_ServiceTaxNo=$_POST['Vendor_ServiceTaxNo'];
$Vendor_BankDetails=$_POST['Vendor_BankDetails'];
$Vendor_ProductDescription=$_POST['Vendor_ProductDescription'];

$sql="UPDATE vendor set Vendor_Name='$Vendor_Name',Vendor_Contactno='$Vendor_Contactno',Vendor_Email='$Vendor_Email',Vendor_Address='$Vendor_Address',Vendor_GSTNO='$Vendor_GSTNO', Vendor_ServiceTaxNo='$Vendor_ServiceTaxNo',Vendor_BankDetails='$Vendor_BankDetails',Vendor_ProductDescription='$Vendor_ProductDescription' where Vendor_Id='$Id'";
$res=mysqli_query($conn,$sql);
if($res)
{
	echo "<br>inserted";
}
else 
{
	echo mysqli_error($conn);
}
 header('Location: http://localhost/Adminpanelinventory6/vendorwithdash.php'); 
}?>
