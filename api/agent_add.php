<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$agtFirstName = $_POST['agtFirstName'];
$agtMiddleInitial = $_POST['agtMiddleInitial'];
$agtLastName = $_POST['agtLastName'];
$agtBusPhone = $_POST['agtBusPhone'];
$agtEmail = $_POST['agtEmail'];
$agtPosition = $_POST['agtPosition'];
$agencyId = (int)$_POST['agencyId'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$insertAgentQuery = "INSERT INTO agents (AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, password) VALUES ('$agtFirstName', '$agtMiddleInitial', '$agtLastName', '$agtBusPhone', '$agtEmail', '$agtPosition', '$agencyId', '$password')";

if ($apiSecret == "sait_oosd_2019_updateSecret")
{
    if(!mysqli_query($con, $insertAgentQuery))
    {
	    echo 'Unable to update';
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>
