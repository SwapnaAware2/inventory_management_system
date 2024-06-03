<?php

require("connection.php");

$data = json_decode(file_get_contents("php://input"));

$request_type = $data->request_type;

// Get all records
if($request_type == 1){
    $sel = mysqli_query($conn,"select * from vendor");
    $data = array();

    while ($row = mysqli_fetch_array($sel)) {
        $data[] = array("Vendor_Id"=>$row['Vendor_Id'],
        	"Vendor_Name"=>$row['Vendor_Name'],
        	"Vendor_ProductDescription"=>$row['Vendor_ProductDescription'],
        	"Vendor_Contactno"=>$row['Vendor_Contactno'],
        	"Vendor_Email"=>$row['Vendor_Email'],
        	"Vendor_Address"=>$row['Vendor_Address'],
        	"Vendor_GSTNO"=>$row['Vendor_GSTNO'],
        	"Vendor_ServiceTaxNo"=>$row['Vendor_ServiceTaxNo'],
        	"Vendor_BankDetails"=>$row['Vendor_BankDetails']
        	);           
    }
    echo json_encode($data);
}
if($request_type == 2){
    $Vendor_Id = $data->Vendor_Id;

    mysqli_query($conn,"delete from vendor where Vendor_Id=".$Vendor_Id);
    echo 1;
}

/*if($request_type == 4){
    $Id = $data->Id;

    mysqli_query($conn,"delete from contact2 where Id=".$Id);
    echo 1;
}*/

?>


