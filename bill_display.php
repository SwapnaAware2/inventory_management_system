<?php

require("connection.php");

$data = json_decode(file_get_contents("php://input"));

$request_type = $data->request_type;

// Get all records
if($request_type == 1){
    $sel = mysqli_query($conn,"select * from bill");
    $data = array();
    while ($row = mysqli_fetch_array($sel)) {
        $data[] = array("Bill_Id"=>$row['Bill_Id'],"Product_Code"=>$row['Product_Code'],"Product_Name"=>$row['Product_Name'],"Product_Quantity"=>$row['Product_Quantity'],"Product_MRP"=>$row['Product_MRP'],"Product_Amount"=>$row['Product_Amount']);  }
    echo json_encode($data);
}
if($request_type == 2){
    $Bill_Id = $data->Bill_Id;

    mysqli_query($conn,"delete from bill where Bill_Id=".$Bill_Id);
    echo 1;
}

// if($request_type == 3){
//     $Bill_Id = $data->Bill_Id;

//     mysqli_query($conn,"delete from contact2 where Id=".$Id);
//     echo 1;
// }

?>

