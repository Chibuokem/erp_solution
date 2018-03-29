<?php
require("connection.php");
session_start();


 $email=$_POST["email"];
 $password=$_POST["password"];

$check="SELECT * FROM admin WHERE email='$email' and password='$password' LIMIT 1";

$login_query=mysqli_query($db, $check);
if(mysqli_num_rows($login_query)==1){
		$row=mysqli_fetch_assoc($login_query);
		$_SESSION['id']= $row['id'];
	     $_SESSION['error']='';
		header("location:admin.php"); //admin page opens
		
		
		
	}
	else{
	 $_SESSION['error']='Invalid username or password';
	  header("location:index.php");
		
	}




?>