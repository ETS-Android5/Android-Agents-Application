<?php
include 'conn_manager.php';

$agentId = $_GET['AgentId']; 
 
$sql = "SELECT * FROM agents WHERE AgentId='$agentId'";

if ($result = mysqli_query($con, $sql))
{

 $resultArray = array();
 $tempArray = array();
 
 while($row = $result->fetch_object())
 {
 $tempArray = $row;
     array_push($resultArray, $tempArray);
 }
 
 echo json_encode($resultArray);
}
 
mysqli_close($con);
?>