<?php
// Start Session because we will save some values to session varaible.
if(isset($_GET['searchstaff'])){

// include connection file
include("pdoconnection.php");
// Define $myusername and $mypassword
$department =$_GET['department']; 
$firstname=$_GET['firstname']; 
// We Will prepare SQL Query



    $STM = $dbh->prepare("select last_name, surname, department,first_name,id  FROM staff_details WHERE department like :department and first_name  like :firstname   " );
// bind paramenters, Named paramenters alaways start with colon(:)
$de = "%".$department."%";
$f = "%".$firstname."%";
    $STM->bindParam(':department', $de);
    $STM->bindParam(':firstname',$f );
// For Executing prepared statement we will use below function
    $STM->execute();
// Count no. of records	
$count = $STM->rowCount();
//just fetch. only gets one row. So no foreach loop needed :)
$rows  = $STM -> fetchAll();

// User Redirect Conditions will go here
	if($count==0)
	
	{
    
		$result='No Result found';
		
		
// Closing MySQL database connection 

}
    $dbh = null;
	}
?>





























