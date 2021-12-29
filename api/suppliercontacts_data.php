<?php
include 'conn_manager.php';

$productId = $_GET['ProductId']; 
 
$sql = "SELECT prod.ProductId as ProductId, ProdName, sup.SupplierId , SupplierContactId, SupConFirstName, SupConLastName, SupConCompany, SupConAddress, SupConCity, SupConPostal,SupConProv, SupConCountry, SupConBusPhone, SupConFax, SupConEmail, SupConURL, AffiliationId FROM products prod INNER JOIN products_suppliers sup on prod.ProductId = sup.ProductId INNER JOIN suppliercontacts con on con.SupplierId = sup.SupplierId WHERE prod.ProductId='$productId'";

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