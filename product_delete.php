<?php
//require("contact3.php");
require("connection.php");
//require("dispay.php");
$Id=$_GET["Id"];
$sql2="delete from product where Product_Id='$Product_Id'";
$res = mysqli_query($conn, $sql2);
if ($res){
	//echo "delete succefully";
	 ?>
	 <script type="text/javascript">
	 	alert("delete succefully");
	 </script>
	 <?php
}
else
{
	echo mysqli_error($conn);
}
  ?>

