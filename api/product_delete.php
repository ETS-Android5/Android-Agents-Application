<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$productId = $_POST['productId'];

$deleteProductQuery = "DELETE FROM `products` WHERE `productId`='$productId'";

if ($apiSecret == "api_secretKey_deleteProduct")
{
   
    if(!mysqli_query($con, $deleteCustomerQuery))
    {
	    echo 'Unable to delete';
    }    
}

mysqli_close($con);
?>