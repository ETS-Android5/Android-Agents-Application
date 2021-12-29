<?php 
include 'conn_manager.php';

$customerId = (int)$_POST['customerId'];
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

//$customerId = (int)"135";
//$custFirstName = "Michelle";
//$custLastName = "Messinger";
//$custAddress = "35 Mountain View";
//$custCity = "Okatoks";
//$custProv = "AB";
//$custPostal = "T2J 2S9";
//$custCountry = "Canada";
//$custHomePhone = "403-244-1586";
//$custBusPhone = "403-590-8522";
//$custEmail = "mmasser@aol.com";
//$agentId = (int)"6";
//$apiSecret = "sait_oosd_2019_updateSecret";

$sql = "UPDATE customers SET CustFirstName='$custFirstName', CustLastName='$custLastName', CustAddress='$custAddress', CustCity='$custCity', CustProv='$custProv', CustPostal='$custPostal', CustCountry='$custCountry', CustHomePhone='$custHomePhone', CustBusPhone='$custBusPhone', CustEmail='$custEmail', AgentId='$agentId' WHERE CustomerId='$customerId'";

if ($apiSecret == "sait_oosd_2019_updateSecret")
{
    if(!mysqli_query($con, $sql))
    {
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>





