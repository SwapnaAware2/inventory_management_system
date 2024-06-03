<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Bill_Id=$_POST['Bill_Id'];
    $Vendor_Id=$_POST['Vendor_Id'];
    $Product_Description=$_POST['Product_Description'];
    $Payment_Mode=$_POST['Payment_Mode'];
    $Amount=$_POST['Amount'];
    $maxsize=24538743895;
    $Date=date('y-m-d');
    //$Upload=$_POST['file'];
    if($_FILES['file']['size']>=$maxsize){
    	echo "size is large";}
    	else{
    //$File=$_POST['File'];
    //$name = $_FILES['file']['File'];
    //$temp_name = $_FILES['file']['tmp_name'];
     $temp=$_FILES['file']['tmp_name'];
    //$file_error=$_FILES['file']['error'];
     $ran=rand();
     $path="img/".$ran.".csv";
     if(move_uploaded_file($temp,$path)){
$sql="INSERT INTO vendorpurchase (Bill_Id,Vendor_Id,Payment_Mode,Amount,Product_Description,Upload,Date)VALUES('$Bill_Id','$Vendor_Id','$Payment_Mode','$Amount','Product_Description','$path','$Date')";

	$result = mysqli_query($conn, $sql);
	if($result)
	{
		echo "product insert successfully";
	}
	else
	{
		
		echo "product not insert successfully";
	}

 }}}
$conn->close();
 header('Location: http://localhost/Adminpanelinventory6/vendorwithdash.php'); 


 ?>

<!-- 
 Product_Id Product_Code  Product_Name  Product_Brand Product_Category  Product_Subcategory Product_Size  Product_Quantity  Product_Buying_Price  Product_Selling_Price -->