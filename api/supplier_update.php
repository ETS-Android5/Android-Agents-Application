<?php 
include 'conn_manager.php';

$apiSecret = $_POST['apiSecret'];
$supplierContactId = $_POST['supplierContactId'];
$supConFirstName = $_POST['supConFirstName'];
$supConLastName = $_POST['supConLastName'];
$supConCompany = $_POST['supConCompany'];
$supConAddress = $_POST['supConAddress'];
$supConCity = $_POST['supConCity'];
$supConProv = $_POST['supConProv'];
$supConPostal = $_POST['supConPostal'];
$supConCountry = $_POST['supConCountry'];
$supConBusPhone = $_POST['supConBusPhone'];
$supConFax = $_POST['supConFax'];
$supConURL = $_POST['supConURL'];
$affiliationId = $_POST['affiliationId'];

);

$sql = "UPDATE suppliercontacts SET SupConFirstName='$SupConFirstName', SupConLastName='$supConLastName', SupConCompany='$supConCompany', SupConAddress='$supConAddress', SupConCity='$supConCity', SupConProv='$supConProv', SupConPostal='$supConPostal', SupConCountry='$supConCountry', SupConBusPhone='$supConBusPhone', SupConFax='$supConFax', SupConURL='$supConURL', AffiliationId='$affiliationId'  WHERE SupplierContactId='$supplierContactId'";

if ($apiSecret == "api_update_activitySecret")
{
    if(!mysqli_query($con, $sql))
    {
	    echo mysqli_error($con);
    }    
}

mysqli_close($con);

?>