<?php
require("connection.php");
session_start();
$_SESSION[department]=array();
		$_SESSION[name]=array();
		$_SESSION[id]=array();
session_destroy();
header('location:index.php');
?>

