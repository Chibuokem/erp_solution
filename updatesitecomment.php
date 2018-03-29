<?php
  $host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "amsley_tech"; 

$con = new mysqli($host,$user,$pass,$db_name);
      extract($_POST,EXTR_OVERWRITE);
	  
	  $query = " UPDATE sitepictures SET comment='$comment' WHERE id='$id' ";
                         
				$run = $con->query($query);
				
				if(isset($run)){
					echo "Comment  sucessfully changed ";
		
		 
	 }
				else{
					echo "Error while changing comment";
				}

?>