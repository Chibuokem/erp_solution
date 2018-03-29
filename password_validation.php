<?php
 if(isset($_POST['pass1'])){
	
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	
	if(empty($pass1)){
	echo "Please fill in your pasword";
	}
	
	else if(empty($pass2)){
	echo "Please fill in your confirmation  pasword";
	}
	
	else if($pass1 !==$pass2){
	echo "Passwords do not match";	
		
	}
	else{
	echo "Passwords match";
	}
	
	 
 }
?>	 