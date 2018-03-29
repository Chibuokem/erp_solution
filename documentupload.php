<?php
session_start();
$host = "localhost"; 
$user = "root";
$pass = ""; 
$db_name = "amsley_tech"; 

$con = new mysqli($host,$user,$pass,$db_name);
      extract($_POST,EXTR_OVERWRITE);
		 
		  
		  
	
			$comment = $_POST["comment"];
			$name=$_POST["name"];
			$id=$_POST["id"];
			$datee= date("Y/m/d");
			$time=date("h:i:sa");
			$surname=$_SESSION[surname];
			$sender=$_SESSION[name]."".$_SESSION[surname];
		
			$target_path="documents/";
	 		$target_path=$target_path.basename($_FILES["document"]["name"]);
			
			
			if(empty($comment) ){
				
			echo"Please fill in the comment ";
		
			}
			
			else if(empty ($_FILES["document"]["tmp_name"])){
			echo "Please browse for file and select";	
			}
			
			else{
			
	 		if(move_uploaded_file($_FILES["document"]["tmp_name"],$target_path)){
			
			
		
				$query = "INSERT INTO documents(filename,sender,owner,comment,timesent,datesent) values 	('$target_path','$sender','$id','$comment','$time','$datee')";

				$run = $con->query($query);
				
				if(isset($run)){
					echo "Upload Successful";
		
		 
	 }
				else{
					echo "Upload failed ";
				}
	 
			}
		
		
		else{
			echo"Upload error";	
			}		 







	
	
	
			}
	
	

	
  



?>


