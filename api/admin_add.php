<?php 
include 'conn_manager.php';

$adminFirstName = $_POST['AdminFirstName'];
$adminLastName = $_POST['AdminLastName'];
$adminEmail = $_POST['AdminEmail'];
$adminPosition = $_POST['AdminPosition'];
$password = password_hash($_POST['AdminPassword'], PASSWORD_DEFAULT);

// $adminFirstName = 'Jerry';
// $adminLastName = 'Jumbahliah';
// $adminEmail = 'jerry@travel.ca';
// $adminPosition = 'admin';
// $password = password_hash('admin', PASSWORD_DEFAULT);

$insertAgentQuery = "INSERT INTO admins (AdminFirstName, AdminLastName, AdminEmail, AdminPosition, AdminPassword) VALUES ('$adminFirstName', '$adminLastName', '$adminEmail', '$adminPosition', '$password')";

if(!mysqli_query($con, $insertAgentQuery))
{
    echo 'Unable to update';
    echo mysqli_error($con);
}    

mysqli_close($con);
?>
