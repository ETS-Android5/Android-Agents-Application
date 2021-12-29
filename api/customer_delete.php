<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$customerId = $_POST['customerId'];

$removeAgtConstraint = "UPDATE agents SET CustomerId =null WHERE `CustomerId`='$customerId'";
$deleteCustomerQuery = "DELETE FROM `customers` WHERE `CustomerId`='$customerId'";

if ($apiSecret == "api_secretKey_deleteCustomer")
{
    mysqli_query($con, $removeAgtConstraint);
    if(!mysqli_query($con, $deleteCustomerQuery))
    {
	    echo 'Unable to delete';
    }    
}

mysqli_close($con);
?>
