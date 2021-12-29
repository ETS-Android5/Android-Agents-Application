<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$customerId = $_POST['customerId'];
$custFirstName = $_POST['custFirstName'];
$custLastName = $_POST['custLastName'];
$custAddress = $_POST['custAddress'];
$custCity = $_POST['custCity'];
$custProv = $_POST['custProv'];
$custPostal = $_POST['custPostal'];
$custCountry = $_POST['custCountry'];
$custHomePhone = $_POST['custHomePhone'];
$custBusPhone = $_POST['custBusPhone'];
$custEmail = $_POST['custEmail'];
$agentId = $_POST['agentId'];


$sql = "UPDATE customers SET CustFirstName='$custFirstName', CustLastName='$custLastName', CustAddress='$custAddress', CustCity='$custCity', CustProv='$custProv', CustPostal='$custPostal', CustCountry='$custCountry', CustHomePhone='$custHomePhone', CustBusPhone='$custBusPhone', CustEmail='$custEmail', AgentId='$agentId' WHERE CustomerId='$customerId'";

if ($apiSecret == "api_updateCustomer_activitySecret")
{
    if(!mysqli_query($con, $sql))
    {
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>