<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amsley_tech";
//print_r($_POST);
//print_r($_POST['data']);
//$complete=$_POST['data'];
//print_r ($complete);
//echo $complete[$lastname];


extract($_POST,EXTR_OVERWRITE);
//print_r($_POST);




try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=amsley_tech", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters

    $stmt = $conn->prepare("UPDATE staff_details SET first_name=:first_name,last_name=:last_name,surname=:surname,Age=:Age,department=:department,address=:address,localgovt=:localgovt,stateoforigin=:stateoforigin,email=:email,bvn=:bvn,bankname=:bankname,accountnumber=:accountnumber,dateofemployement=:dateofemployement,phone=:phone,password=:password WHERE id = :id ");

    /*$stmt->bindParam(':first_name', $first_name);
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
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':id', $id);*/
	
	$arr = array(':first_name' =>$firstname, ':last_name' => $lastname, ':surname' =>$surname, ':Age' =>$Age, ':department' =>$department,':address' =>$address,':localgovt' =>$localgovt,':stateoforigin' => $stateoforigin,":email" =>$email, ":bvn" =>$bvn,":bankname" => $bankname,":accountnumber" =>$accountnumber,":dateofemployement" =>$dateofemployement,":phone" =>$phone,":password" =>$password,":id" =>$id);
	
	//$stmt->execute($arr);
	
	$stmt->execute($arr);
	
	if($stmt){
		
		echo "Update sucessful";
		
	}
	else{
	  echo'Update failed ';	
	}
	



  
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

?>
