<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$supplierContactId = $_POST['supplierContactId'];

$deleteSupQuery = "DELETE FROM `suppliercontacts` WHERE `SupplierContactId`='$supplierContactId'";

if ($apiSecret == "api_secretKey_deleteAgent")
{
    
    if(!mysqli_query($con, $deleteSupQuery))
    {
	    echo 'Unable to delete';
    }    
}

mysqli_close($con);
?>