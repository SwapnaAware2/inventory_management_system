<?php

require("connection.php");

$data = json_decode(file_get_contents("php://input"));

$request_type = $data->request_type;

// Get all records
if($request_type == 1){
    $sel = mysqli_query($conn,"select * from product");
    $data = array();

    while ($row = mysqli_fetch_array($sel)) {
        $data[] = array("Product_Id"=>$row['Product_Id'],"Product_Code"=>$row['Product_Code'],"Product_Name"=>$row['Product_Name'],"Product_Brand"=>$row['Product_Brand'],"Product_Category"=>$row['Product_Category'],"Product_Subcategory"=>$row['Product_Subcategory'],"Product_Size"=>$row['Product_Size'],"Product_Quantity"=>$row['Product_Quantity'],"Product_Buying_Price"=>$row['Product_Buying_Price'],"Product_Selling_Price"=>$row['Product_Selling_Price']);
    echo json_encode($data);
}
if($request_type == 2){
    $Product_Id = $data->Product_Id;

    mysqli_query($conn,"delete from product where Product_Id=".$Product_Id);
    echo 1;
}

/*if($request_type == 4){
    $Id = $data->Id;

    mysqli_query($conn,"delete from contact2 where Id=".$Id);
    echo 1;
}*/

?>

