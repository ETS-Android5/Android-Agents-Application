<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$agentId = (int)$_POST['agentId'];
$agtFirstName = $_POST['agtFirstName'];
$agtMiddleInitial = $_POST['agtMiddleInitial'];
$agtLastName = $_POST['agtLastName'];
$agtBusPhone = $_POST['agtBusPhone'];
$agtEmail = $_POST['agtEmail'];
$agtPosition = $_POST['agtPosition'];
$agencyId = (int)$_POST['agencyId'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//$apiSecret = "api_updateAgent_activitySecret";
//$agentId = (int)"21";
//$agtFirstName = "Sandy";
//$agtMiddleInitial = "S";
//$agtLastName = "Summers";
//$agtBusPhone = "403-333-2342";
//$agtEmail = "sandysummer@travelexperts.ca";
//$agtPosition = "VP Sales";
//$agencyId = (int)"1";
//$password = password_hash("password", PASSWORD_DEFAULT);

$sql = "UPDATE agents SET AgtFirstName='$agtFirstName', AgtMiddleInitial='$agtMiddleInitial', AgtLastName='$agtLastName', AgtBusPhone='$agtBusPhone', AgtEmail='$agtEmail', AgtPosition='$agtPosition', AgencyId='$agencyId', password='$password' WHERE AgentId='$agentId'";


if(!mysqli_query($con, $sql))
{
	echo mysqli_error($con);
}    


mysqli_close($con);

?>
