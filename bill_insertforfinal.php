<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Bill_No=$_POST['Bill_No'];
    $Customer_Contact_No=$_POST['Customer_Contact_No'];
    $Customer_Name=$_POST['Customer_Name'];
    $Amount=$_POST['Amount'];
    $Date=date('y-m-d');
    $sql="INSERT INTO billrecord (Bill_No,Customer_Contact_No,Customer_Name,Amount,Date
)VALUES('$Bill_No','$Customer_Contact_No','$Customer_Name','$Amount','$Date');";
//$sql.="INSERT INTO billafter (Bill_No)VALUES('$Bill_No');";
//$sql.="INSERT INTO billafter (Bill_Id,Product_Code,Product_Name,Product_MRP,Product_Amount,Product_Quantity,Bill_No
//
//) 
//SELECT Bill_Id,Product_Code,Product_Name,Product_Quantity,Product_MRP,Product_Amount FROM bill;";
$sql.="DELETE FROM bill";
     $result=mysqli_multi_query($conn,$sql);
	//$result = mysqli_query($conn, $sql);
	if($result)
	{
		echo "sale insert successfully";
	}
	else
	{
		
		echo "sale not insert successfully";
	}

 }
$conn->close();
// header('Location: http://localhost/Adminpanelinventory6/billwithdash2.php'); 


 ?>

<!-- 
 Product_Id Product_Code  Product_Name  Product_Brand Product_Category  Product_Subcategory Product_Size  Product_Quantity  Product_Buying_Price  Product_Selling_Price -->