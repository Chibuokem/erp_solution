<?php

require("connection.php");
   if(empty($_POST["email"])){
       echo "Please Fill in ur email*";
   }
   
   else{

 if (isset($_POST["email"])){
 $email=$_POST["email"];
 

$check="SELECT * FROM staff_details WHERE email='$email'  LIMIT 1";

$login_query=mysqli_query($db, $check);
if(mysqli_num_rows($login_query)==1){
		$row=mysqli_fetch_assoc($login_query);
		
	echo "Email already exists";
		
		
		
	}
	else{
		echo "Email is okay";
	}
}

   }
?>