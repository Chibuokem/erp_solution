<?php
session_start();
$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "amsley_tech"; 

$con = new mysqli($host,$user,$pass,$db_name);
      extract($_POST,EXTR_OVERWRITE);
		 
		  
		  
	
		
		
			
			$datee= date("Y/m/d");
			$time=date("h:i:sa");
			$surname=$_SESSION[surname];
			$sender=$_SESSION[name]."".$_SESSION[surname];
		
		
	 	
			
			
			if(empty($message) ){
				
			echo"Please fill your message ";
		
			}
			
			else{
			
	 		
			
			
		
				$query = "INSERT INTO messages(message,sender,reciever,timesent,datesent) values 	('$message','$sender','$id','$time','$datee')";

				$run = $con->query($query);
				
				if(isset($run)){
					echo "Message Sent";
		
		 
	 }
				else{
					echo "Message not sent ";
				}
	 
			
		
		
			 







	
	
	
			}
	
	

	
  



?>


