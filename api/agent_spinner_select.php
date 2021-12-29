<?php
include 'conn_manager.php';

$agencyId = $_GET['AgencyId'];
 
$sql = "SELECT AgencyId, AgncyAddress, AgncyCity FROM agencies WHERE AgencyId='$agencyId'";

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
 else {
    echo mysqli_error($con);
}
 
mysqli_close($con);
?>