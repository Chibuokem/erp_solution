<?php 
include("pdoconnection.php");

// Start Session because we will save some values to session varaible.



// include connection file

//$reciever=$_SESSION[id];
//$reciever=1;

 
// We Will prepare SQL Query



    $STM = $dbh->prepare("SELECT * FROM sitepictures " );
// bind paramenters, Named paramenters alaways start with colon(:)

    //$STM->bindParam(':reciever', $reciever);
   
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
		echo $result;
		
// Closing MySQL database connection 

}
    $dbh = null;
	
	
?>





























