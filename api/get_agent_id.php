<?php
include 'conn_manager.php';

$customerId = $_GET['CustomerId']; 
 
$sql = "GET AgentId FROM customers WHERE CustomerId='CustomerId'";

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