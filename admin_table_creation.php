<?php
require_once("connection.php");

$createtable="create table if not exists 
admin(id int(11) 
auto_increment, 
primary key(id),
name varchar(225),
email varchar(225),
password varchar(225),
phone varchar(225))";
   
$sql = $db->query($createtable) or die($db->error);
if(isset($sql)){
	echo "admin table creation successful.<br/>";
}
else{
	echo"admin table was not created.<br/>";}

?>