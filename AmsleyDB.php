<?php

class AmsleyDB{
	private static $instance = null;
	private $_error =false,
			$_result,
			$_count =0,
			$_query,
			$_pdo;
			
	private function __construct(){
			try{
				$this->_pdo = new PDO("mysql:host=127.0.0.1;dbname=amsley_tech","root","");	
			}catch(PDOException $e){
				die($e->getMessage());
			}
	}
	
	public static function getInstance(){
			if(isset(self::$instance)){
				return self::$instance;
			}
			self::$instance = new AmsleyDB();
			return self::$instance;
	}
	
	public function createStaffContactDetailsTable(){
			$db = self::getInstance();
			$sql = "CREATE TABLE tblStaffDetails (
				id int primary key auto_increment,
				residential varchar(255) not null,
				email varchar(50 not null),
				phone varchar(50) not null,
				city varchar(50) not null,
				stateOfOrigin varchar(50) not null,
				lgaOfOrigin varchar(50) not null
			);";
			$this->_pdo->query();
	}
	
	public function createStaffTable(){
			$db = self::getInstance();
			$sql = "CREATE TABLE tblStaff (
				id int primary key auto_increment,
				firstname varchar(50) not null,
				middlename varchar(50),
				surname varchar(50) not null,
			);";
			$this->_pdo->query();
	}
	
}
$db = AmsleyDB::getInstance();