<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Product_Id=$_POST['Product_Id'];
    $Product_Code=$_POST['Product_Code'];
    $Product_Name=$_POST['Product_Name'];
    $Product_Brand=$_POST['Product_Brand'];
    $Product_Category=$_POST['Product_Category'];
    $Product_Subcategory=$_POST['Product_Subcategory'];
    $Product_Size=$_POST['Product_Size'];
    $Product_Quantity=$_POST['Product_Quantity'];
    $Product_Buying_Price=$_POST['Product_Buying_Price'];
    $Product_Selling_Price=$_POST['Product_Selling_Price'];
	$sql="UPDATE product SET Product_Name='$Product_Name',Product_Code='$Product_Code',Product_Brand='$Product_Brand',Product_Category='$Product_Category',Product_Subcategory='$Product_Subcategory',Product_Size='$Product_Size',Product_Quantity='$Product_Quantity',Product_Buying_Price='$Product_Buying_Price',Product_Selling_Price='$Product_Selling_Price' WHERE Product_Id='$Product_Id'";
	 $result = mysqli_query($conn, $sql);
	if($result)
	{
		// echo "<script type=\"text/javascript\">
  //             alert(\"product update successsfully\");
  //             window.location = \"productwithdash.php\"
  //             </script>"; 
    echo "successsfully";
	}
	else
	{
    echo "not update";
	}

 
$conn->close();
header('Location: http://localhost/Adminpanelinventory6/productwithdash.php'); 

}
 ?>