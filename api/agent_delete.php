<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$agentId = (int)$_POST['agentId'];

$removeCustConstraint = "UPDATE customers SET AgentId=null WHERE `AgentId`='$agentId'";
$deleteAgentQuery = "DELETE FROM `agents` WHERE `AgentId`='$agentId'";

if ($apiSecret == "api_secretKey_deleteAgent")
{
    mysqli_query($con, $removeCustConstraint);
    if(!mysqli_query($con, $deleteAgentQuery))
    {
	    echo 'Unable to delete';
    }    
}

mysqli_close($con);
?>
