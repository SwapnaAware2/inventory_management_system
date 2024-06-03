<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Product_Name=$_POST['Product_Name'];
    $Product_Code=$_POST['Product_Code'];
    $Product_Brand=$_POST['Product_Brand'];
    $Product_Category=$_POST['Product_Category'];
    $Product_Subcategory=$_POST['Product_Subcategory'];
    $Product_Size=$_POST['Product_Size'];
    $Product_Quantity=$_POST['Product_Quantity'];
    $Product_Buying_Price=$_POST['Product_Buying_Price'];
    $Product_Selling_Price=$_POST['Product_Selling_Price'];
	$sql="INSERT INTO product (Product_Id,Product_Code,Product_Name,Product_Quantity,Product_Brand,Product_Category,Product_Subcategory,Product_Size,Product_Buying_Price,Product_Selling_Price
)VALUES('','$Product_Code','$Product_Name','$Product_Quantity','$Product_Brand','$Product_Category','$Product_Subcategory','$Product_Size','$Product_Buying_Price','$Product_Selling_Price')";
	 $result = mysqli_query($conn, $sql);
	if($result)
	{
		echo "product insert successfully";
	}
	else
	{
		
		echo "product  not insert successfully";
	}

 
$conn->close();
header('Location: http://localhost/Adminpanelinventory6/productwithdash.php'); 

}
 ?>

<!-- 
 Product_Id Product_Code  Product_Name  Product_Brand Product_Category  Product_Subcategory Product_Size  Product_Quantity  Product_Buying_Price  Product_Selling_Price -->