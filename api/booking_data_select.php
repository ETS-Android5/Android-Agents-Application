<?php
include 'conn_manager.php';

$bookingId = $_GET['BookingId']; 
 
$sql = "SELECT bookings.BookingId as BookingId, BookingDate, BookingNo, TravelerCount, CustomerId, TripTypeId BookingDetailId, ItineraryNo, TripStart, TripEnd, Description, Destination, BasePrice, AgencyCommission, RegionId, ClassName FROM bookings INNER JOIN bookingdetails on bookings.BookingId = bookingdetails.BookingId INNER JOIN classes on classes.ClassId = bookingdetails.ClassId WHERE bookings.BookingId='$bookingId'";

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