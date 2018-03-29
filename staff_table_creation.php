<?php
require_once("connection.php");

$createtable="create table if not exists 
staff_details(id int(11) 
auto_increment, 
primary key(id),
first_name varchar(225),
last_name varchar(225),
surname varchar(225),
Age varchar(225),
department varchar(225),
address varchar(225),
localgovt varchar(225),
stateoforigin varchar(225),
email varchar(225),
bvn varchar(225),
bankname varchar(225),
accountnumber varchar(225),
dateofemployement varchar(225),
phone varchar(225),
password varchar(225))";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "staff table creation successful.<br/>";
}
else{
	echo"staff table was not created.<br/>";}

?>