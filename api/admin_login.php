<?php
include 'conn_manager.php';

$email = trim(htmlspecialchars($_GET['email']));
$password = trim(htmlspecialchars($_GET['password']));

// $email = trim(htmlspecialchars('jerry@travel.ca'));
// $password = trim(htmlspecialchars('admin'));

$pass_query = mysqli_query($con, "SELECT AdminPassword FROM admins WHERE AdminEmail='$email'");
$pass = mysqli_fetch_array($pass_query);
$hashed = $pass['AdminPassword']; 

	if(password_verify($password, $hashed)) 
	{
	    $sql = "SELECT AdminId, AdminFirstName, AdminLastName, AdminEmail, AdminPosition from admins WHERE AdminEmail='$email'";    
	    
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
	}
	else
	{
	     echo mysqli_error($con);
	}
			
mysqli_close($con);
?>