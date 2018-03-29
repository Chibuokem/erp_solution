<?php
// Start Session because we will save some values to session varaible.

session_start();
// include connection file
include("pdoconnection.php");
// Define $myusername and $mypassword
$email=$_POST['email']; 
$Password=$_POST['password']; 
// We Will prepare SQL Query
    $STM = $dbh->prepare("SELECT department,first_name,id,surname FROM staff_details WHERE email = :email AND Password = :Password LIMIT 1" );
// bind paramenters, Named paramenters alaways start with colon(:)
    $STM->bindParam(':email', $email);
    $STM->bindParam(':Password', $Password);
// For Executing prepared statement we will use below function
    $STM->execute();
// Count no. of records	
$count = $STM->rowCount();
//just fetch. only gets one row. So no foreach loop needed :)
$row  = $STM -> fetch();
// User Redirect Conditions will go here
	if($count==1)
	
	{
    	// Save type and other information in Session for future use.
		$_SESSION[department]=$row[0];
		$_SESSION[name]=$row[1];
		$_SESSION[id]=$row[2];
		$_SESSION[surname]=$row[3];
		
		
		// if user department is ict only then he can access admin page.
		/*if($row[0] == 'ict')	 
		{ 
		header( "location:ict.php");
			}
		
		else if($row[0] == 'civil')   { 
		header( "location:civil.php"); 
		 }
		 else if($row[0] == 'humanresource')   { 
		header( "location:human_resources.php"); 
		 }
		 else if($row[0] == 'microfinance')   { 
		header( "location:microfinance.php"); 
		 }*/
		echo true;

	}
	else 
	{
		 echo "Invalid username or password ";
		 
		 //$_SESSION['error']='Incorrect Email or Password'; 
		 
		 
	//header("location:index.php");
	}
// Closing MySQL database connection 
    $dbh = null;
?>





























