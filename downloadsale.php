<?php
require("connection.php");
$output = '';
if(isset($_POST["download"]))
{
	$sql="select *from sale order by Bill_Id desc";
	$res=mysqli_query($conn,$sql);
	if(mysqli_num_rows($res)>0)
	{
$output.='
<table class="table" border="1"> 
<tr>
  <th>Bill ID</th>
  <th>Customer_Contact_No</th>
  <th>Payment Mode</th>
  <th>Amount</th>
  <th>View Bill</th>
  <th>Date</th></tr>
';
while($row=mysqli_fetch_array($res))
{
	$output.='
<tr>
<th>'.$row["Bill_Id"].'</th>
<th>'.$row["Customer_Contact_No"].'</th>
<th>'.$row["Payment_Mode"].'</th>
<th>'.$row["Amount"].'</th>
<th>'.$row["View_Bill"].'</th>
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
