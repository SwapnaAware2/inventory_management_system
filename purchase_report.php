<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<body>
	<div id="date" class="well">
	<label>Select Date : </label>
					<div id="reportrange" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 300px">
					    <i class="fa fa-calendar"></i>&nbsp;
					    <span></span> <i class="fa fa-caret-down"></i>
					</div>

					<script type="text/javascript">
					$(function() {

					    var start = moment().subtract(29, 'days');
					    var end = moment();

					    function cb(start, end) {
					        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
					    }

					    $('#reportrange').daterangepicker({
					        startDate: start,
					        endDate: end,
					        ranges: {
					           'Today': [moment(), moment()],
					           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					           'This Month': [moment().startOf('month'), moment().endOf('month')],
					           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					        }
					    }, cb);

					    cb(start, end);

					});
					</script>
			
			</div>
			<div class="table-responsive"> 
				<div class="well">
                 <table class="table table-bordered" cellpadding="4" cellspacing="4" border="1" class="display" id="example">
                    <thead>
                         <tr>
                            <th>Bill ID</th>
							<th>Vendor ID</th>
                            <th>Product Description</th>
                            <th>Payment Mode</th>
                            <th>Amount</th>
                            <th>Date</th>

                        </tr>
                    </thead>
                    <?php
require("connection.php");
$sql2="select * from vendorpurchase";
$res = mysqli_query($conn, $sql2);
while($a=mysqli_fetch_assoc($res))
{
    $Bill_Id=$a['Bill_Id'];
    $Vendor_Id=$a['Vendor_Id'];
    $Product_Description=$a['Product_Description'];
    $Payment_Mode=$a['Payment_Mode'];
    $Amount=$a['Amount'];
    $Date=$a['Date'];
 ?>
 <tbody>
<tr>
 <?php

 echo"
 <td>$a[Bill_Id]</td>
 <td>$a[Vendor_Id]</td>
 <td>$a[Product_Description]</td>
  <td>$a[Payment_Mode]</td>
  <td>$a[Amount]</td>
  <td>$a[Date]</td>
 ";?>
 </tr></tbody>
<?php
}
  ?>
                </table>
               <span>
                <form action="downloadpurchase.php" method="post" enctype="multipart/form-data">
                <input class="btn btn-primary" type="submit" name="download" value="Export to Excel"> 
                </form>
               </span>
			</div>
        </div>
    </body>
    </html>