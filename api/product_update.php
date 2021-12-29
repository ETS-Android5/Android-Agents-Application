<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$prodName = $_POST['prodName'];

$sql = "UPDATE products SET ProdName='$prodName";

if ($apiSecret == "api_updateProduct_activitySecret")
{
    if(!mysqli_query($con, $sql))
    {
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>
