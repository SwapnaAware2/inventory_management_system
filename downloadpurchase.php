<?php
require("connection.php");
$output = '';
if(isset($_POST["download"]))
{
	$sql="select *from vendorpurchase order by Bill_Id desc";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
$output.='
<table class="table" bordered="1"> 
<tr>
  <th>Bill ID</th>
  <th>Vendor ID</th>
  <th>Product Description</th>
  <th>Payment Mode</th>
  <th>Amount</th>
   <th>Date</th>
';
while($row=mysqli_fetch_array($res))
{
	$output.='
<tr>
<th>'.$row["Bill_Id"].'</th>
<th>'.$row["Vendor_Id"].'</th>
<th>'.$row["Product_Description"].'</th>
<th>'.$row["Payment_Mode"].'</th>
<th>'.$row["Amount"].'</th>
<th>'.$row["Date"].'</th>
<tr>
';

	}
	$output .='</table>';
	header("Content-Type:application/xls");
	header("Content-Disposition:attachment;filename=download.xls");
	echo $output;
}
}
?>
