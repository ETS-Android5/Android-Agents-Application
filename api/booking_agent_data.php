<?php
include 'conn_manager.php';

$bookingId = $_GET['BookingId'];
 
$sql = "select agents.AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId from agents inner join customers on customers.AgentId = agents.AgentId inner join bookings on bookings.CustomerId = customers.CustomerId where bookings.BookingId='$bookingId'";

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