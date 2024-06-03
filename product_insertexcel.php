<?php
 if(isset($_POST["Import"])){
    require('connection.php');
    $filename=$_FILES["file"]["tmp_name"];    
     if($_FILES["file"]["size"] > 0)
     {
        $file = fopen($filename, "r");
          while (($mydata = fgetcsv($file, 10000, ",")) !== FALSE)
           {
   $Product_Name=$mydata[0];
    $Product_Code=$mydata[1];
    $Product_Brand=$mydata[2];
    $Product_Category=$mydata[3];
    $Product_Subcategory=$mydata[4];
    $Product_Size=$mydata[5];
    $Product_Quantity=$mydata[6];
    $Product_Buying_Price=$mydata[7];
    $Product_Selling_Price=$mydata[8];
	$sql="INSERT INTO product (Product_Id,Product_Code,Product_Name,Product_Quantity,Product_Brand,Product_Category,Product_Subcategory,Product_Size,Product_Buying_Price,Product_Selling_Price
)VALUES('','$Product_Code','$Product_Name','$Product_Quantity','$Product_Brand','$Product_Category','$Product_Subcategory','$Product_Size','$Product_Buying_Price','$Product_Selling_Price')";
$result = mysqli_query($conn, $sql);
if(!isset($result))
        {
          echo "<script type=\"text/javascript\">
              alert(\"Invalid File:Please Upload CSV File.\");
              window.location = \"productwithdash.php\"
              </script>";    
        }
        else {
            echo "<script type=\"text/javascript\">
            alert(\"CSV File has been successfully Imported.\");
            window.location = \"productwithdash.php\"
          </script>";
        }
           }
      
           fclose($file);  
     }
  }   
 ?>