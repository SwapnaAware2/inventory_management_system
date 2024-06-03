
<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Name=$_POST['Product_Name'];
    $Code=$_POST['Product_Code'];
    $Quantity=$_POST['Product_Quantity'];
    $MRP=$_POST['Product_Selling_Price'];
    //$Amount=($Quantity*$MRP);
    //die($Amount);   	
	 $sql="INSERT INTO bill (Bill_Id,Product_Code,Product_Name,Product_Quantity,Product_MRP,Product_Amount)VALUES('','$Code','$Name','$Quantity','$MRP',('$Quantity'*'$MRP'));";
	 $sql.="UPDATE product SET Product_Quantity=(Product_Quantity-'$Quantity') WHERE Product_Code='$Code'";
	// $sql="INSERT INTO bill (Bill_Id,Product_Code,Product_Name,Product_Quantity,Product_MRP,Product_Amount)VALUES('',$Code','$Name','$Quantity','$MRP','$Amount')";
     $result=mysqli_multi_query($conn,$sql);
// $sql="INSERT INTO bill (Bill_Id,Product_Code,Product_Name,Product_Quantity,Product_MRP,Product_Amount)VALUES('','$Code','$Name','$Quantity','$MRP','$Amount')";
 //$result = mysqli_query($conn, $sql);
	if($result)
	{
		echo "record has been uddate and insert successfully";
	}
	else
	{
		echo "Unable to insert";
	}

$conn->close();
 header('Location: http://localhost/Adminpanelinventory6/billwithdash2.php'); 


}
 ?>