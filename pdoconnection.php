<?php
// mysql hostname
$hostname = 'localhost';
// mysql username
$username = 'root';
// mysql password
$password = '';
// Database Connection using PDO
try {
$dbh = new PDO("mysql:host=$hostname;dbname=amsley_tech", $username, $password);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>