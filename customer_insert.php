<?php 
if (isset($_POST["submit"])) {
    require("connection.php");
    $Customer_Name=$_POST['Customer_Name'];
    $Customer_Email=$_POST['Customer_Email'];
    $Customer_Contact_No=$_POST['Customer_Contact_No'];
    $Date=date('y-m-d');
	$sql="INSERT INTO customer (Customer_Id,Customer_Name,Customer_Contact_No,Customer_Email,date)VALUES('','$Customer_Name','$Customer_Contact_No','$Customer_Email','$Date')";
	 $result = mysqli_query($conn, $sql);
	if($result)
	{
		echo "record has been insert successfully";
	}
	else
	{
		echo "Unable to insert";
	}
$conn->close();
header("location: http://localhost/Adminpanelinventory6/billwithdash2.php");
}
 ?>