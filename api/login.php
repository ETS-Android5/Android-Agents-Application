<?php
include 'conn_manager.php';

$email = trim(htmlspecialchars($_GET['email']));
$password = trim(htmlspecialchars($_GET['password']));

$pass_query = mysqli_query($con, "SELECT password FROM agents WHERE AgtEmail='$email'");
$pass = mysqli_fetch_array($pass_query);
$hashed = $pass['password']; 

	if(password_verify($password, $hashed)) 
	{
	    $sql = "SELECT AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId from agents WHERE AgtEmail='$email'";    
	    
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
	    return null;
	}
			
mysqli_close($con);
?>