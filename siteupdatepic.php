<?php

$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "amsley_tech"; 

$con = new mysqli($host,$user,$pass,$db_name);
      extract($_POST,EXTR_OVERWRITE);
		 
		  
		  
	
			//$comment = $_POST["comment"];
			$name=$_POST["name"];
			$id=$_POST['id'];
		
			$target_path="image/";
	 		$target_path=$target_path.basename($_FILES["picture"]["name"]);
			
			
			if(empty($_FILES["picture"]["name"]) ){
				
			echo"Please upload a picture ";
		
			}
			
			
			else{
			
	 		if(move_uploaded_file($_FILES["picture"]["tmp_name"],$target_path)){
			
			
		
				$query = " UPDATE sitepictures SET picturename='$target_path' WHERE id='$id' ";
                         
				$run = $con->query($query);
				
				if(isset($run)){
					echo "Picture sucessfully changed ";
		
		 
	 }
				else{
					echo "Error while changing picture";
				}
	 
			}
		
		
		else{
			echo"Image upload error";	
			}		 







	
	
	
			}
	
	

	
  



?>


