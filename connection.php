<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='amsley_tech';
$db= mysqli_connect("$db_host","$db_user","$db_pass","$db_name") or die("cannot connect to database");

if($db->connect_error>0)
{
	die($db->connect_error);
}

?>