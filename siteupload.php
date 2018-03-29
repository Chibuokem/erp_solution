<?php

$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "amsley_tech"; 

$con = new mysqli($host,$user,$pass,$db_name);
      extract($_POST,EXTR_OVERWRITE);
		 
		  
		  
	
			$comment = $_POST["comment"];
			$name=$_POST["name"];
			
		
			$target_path="image/";
	 		$target_path=$target_path.basename($_FILES["picture"]["name"]);
			
			
			if(empty($comment) ){
				
			echo"Please fill in the comment ";
		
			}
			
			
			else{
			
	 		if(move_uploaded_file($_FILES["picture"]["tmp_name"],$target_path)){
			
			
		
				$query = "INSERT INTO sitepictures(picturename,comment) values 	('$target_path','$comment')";

				$run = $con->query($query);
				
				if(isset($run)){
					echo "Upload Successful";
		
		 
	 }
				else{
					echo "Upload failed ";
				}
	 
			}
		
		
		else{
			echo"Image upload error";	
			}		 







	
	
	
			}
	
	

	
  



?>


