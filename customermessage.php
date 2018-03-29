<?php
// Start Session because we will save some values to session varaible.

session_start();
// include connection file
include("pdoconnection.php");
// Define $myusername and $mypassword
  //extract($_POST,EXTR_OVERWRITE); 
  $name=$_POST['name'];
  $email=$_POST['email'];
  $telephone=$_POST['telephone'];
  $message=$_POST['message'];
// We Will prepare SQL Query
    $STM = $dbh->prepare("INSERT INTO customer(name,email,telephone,message) VALUES	(:name,:email,:telephone,:message)" );
	
	
	
// bind paramenters, Named paramenters alaways start with colon(:)
    /*$STM->bindParam(':name', $name);
    $STM->bindParam(':email', $email);
	$STM->bindParam(':telephone', $telephone);
	$STM->bindParam(':message', $message);*/
	
	
	$arr = array(":name" =>$name, ":email" => $email, ":telephone" =>$telephone, ":message" =>$message);
// For Executing prepared statement we will use below function
    $STM->execute($arr);
	
	if ($STM){
		echo"Message sent";
	}
	else{
	  echo"Error while sending message";	
	}
		
// Closing MySQL database connection 
    $dbh = null;
?>




