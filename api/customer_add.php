<?php 
include 'conn_manager.php';

//$custFirstName = "Sarah";
//$custLastName = "Fudge";
//$custAddress = "22 Uphill";
//$custCity = "Tumbler Ridge";
//$custProv = "AB";
//$custPostal = "T4P 2M5";
//$custCountry = "Canada";
//$custHomePhone = "403-333-7777";
//$custBusPhone = "778-554-3333";
//$custEmail = "sarahf77@hotmail.com";
//$agentId = (int)"1";
//$apiSecret = "sait_oosd_2019_add_custSecret";

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
$agentId = (int)$_POST['agentId'];
$apiSecret = $_POST['apiSecret'];

$insertCustomerQuery = "INSERT INTO customers (CustFirstName,CustLastName,CustAddress,CustCity,CustProv,CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail,AgentId) VALUES ('$custFirstName','$custLastName','$custAddress','$custCity','$custProv','$custPostal','$custCountry','$custHomePhone','$custBusPhone','$custEmail','$agentId')";

if ($apiSecret == "sait_oosd_2019_add_custSecret")
{
    if(!mysqli_query($con, $insertCustomerQuery))
    {
	    echo 'Unable to update';
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>
