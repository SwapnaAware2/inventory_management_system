<?php
require("connection.php");
$output = '';
if(isset($_POST["download"]))
{
	$sql="select *from product order by Product_Id desc";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
$output.='
<table border="1"> 
<tr>
 <th>Code</th>
 <th>Name</th>
 <th>Brand</th>
 <th>Category</th>
 <th>Subcategory</th>
 <th>Size</th>
 <th>Quantity</th>
 <th>Buying_Price</th>
 <th>Selling_Price</th></tr>  
';
while($row=mysqli_fetch_array($res))
{
	$output.='
<tr>
<th>'.$row["Product_Id"].'</th>
<th>'.$row["Product_Code"].'</th>
<th>'.$row["Product_Name"].'</th>
<th>'.$row["Product_Brand"].'</th>
<th>'.$row["Product_Category"].'</th>
<th>'.$row["Product_Subcategory"].'</th>
<th>'.$row["Product_Size"].'</th>
<th>'.$row["Product_Quantity"].'</th>
<th>'.$row["Product_Buying_Price"].'</th>
<th>'.$row["Product_Selling_Price"].'</th><tr>
';

	}
	$output .='</table>';
	header("Content-Type:application/xls");
	header("Content-Disposition:attachment;filename=download.xls");
	echo $output;
}
}
?>
