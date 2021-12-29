<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$prodName = $_POST['prodName'];


$insertProductQuery = "INSERT INTO products (ProdName) VALUES ('$prodName')";

if ($apiSecret == "sait_oosd_2019_updateSecret")
{
    if(!mysqli_query($con, $insertProductQuery))
    {
	    echo 'Unable to update';
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>