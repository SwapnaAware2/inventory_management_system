<?php
if(isset($_POST['submit']))
{
require("connection.php");
$name=$_POST['Vendor_Name'];
$contactno=$_POST['Vendor_Contactno'];
//die($contactno);
$email=$_POST['Vendor_Email'];
$address=$_POST['Vendor_Address'];
$gstno=$_POST['Vendor_GSTNO'];
$servicetaxno=$_POST['Vendor_ServiceTaxNo'];
$bankdetails=$_POST['Vendor_BankDetails'];
$productdescription=$_POST['Vendor_ProductDescription'];
$sql="insert into vendor(Vendor_Id,Vendor_Name,Vendor_Contactno,Vendor_Email,Vendor_Address,Vendor_GSTNO,Vendor_ServiceTaxNo,Vendor_BankDetails,Vendor_ProductDescription)
values('','$name','$contactno','$email','$address','$gstno','$servicetaxno','$bankdetails','$productdescription')";
$res=mysqli_query($conn,$sql);
if($res)
{
	echo "success";
}
else 
{
	echo mysqli_error($conn);
}

if($res)
{
echo "success";
}
else
{
echo "failure";
}
}
 header('Location: http://localhost/Adminpanelinventory6/vendorwithdash.php'); 
?>