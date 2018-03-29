<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amsley_tech";

extract($_POST,EXTR_OVERWRITE);

try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=amsley_tech", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO staff_details (first_name, last_name, surname,Age,department,address,localgovt,stateoforigin,email,bvn,bankname,accountnumber,dateofemployement,phone,password)
    VALUES (:first_name, :last_name, :surname, :Age, :department, :address, :localgovt, :stateoforigin, :email, :bvn, :bankname, :accountnumber,:dateofemployement, :phone, :password   )");
   /* $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':surname', $surname);
	$stmt->bindParam(':Age', $Age);
	$stmt->bindParam(':department', $department);
	$stmt->bindParam(':address', $address);
	$stmt->bindParam(':localgovt', $localgovt);
	$stmt->bindParam(':stateoforigin', $stateoforigin);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':bvn', $bvn);
	$stmt->bindParam(':bankname', $bankname);
	$stmt->bindParam(':accountnumber', $accountnumber);
	$stmt->bindParam(':dateofemployement', $dateofemployement);
	$stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':password', $password);*/
	$arr = array(":first_name" =>$first_name, ":last_name" => $last_name, ":surname" =>$surname, ":Age" =>$Age, ":department" =>$department,":address" =>$address,":localgovt" =>$localgovt,":stateoforigin" => $stateoforigin,":email" =>$email, ":bvn" =>$bvn,":bankname" => $bankname,":accountnumber" =>$accountnumber,":dateofemployement" =>$dateofemployement,":phone" =>$phone,":password" =>$password);
	
	$stmt->execute($arr);
	if($stmt){
		echo'Staff successfully Added';
		
	}
	else{
	  echo'failed';	
	}
	



  
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;


?>