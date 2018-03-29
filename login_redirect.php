<?php session_start();
if($_SESSION[department] == 'ict')	 
		{ 
		header( "location:ict.php");
		}
		
		else if($_SESSION[department] == 'civil')   { 
		header( "location:civil.php"); 
		 }
		 else if($_SESSION[department] == 'humanresources')   { 
		header( "location:human_resources.php"); 
		 }
		 else if($_SESSION[department] == 'microfinance')   { 
		header( "location:microfinance.php"); 
		 }
		 
		 else{
			echo"Redirection failed "; 
		 }
		 ?>