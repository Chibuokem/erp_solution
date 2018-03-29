<?php
include("pdoconnection.php");

$id=$_GET['id']; //EXTRACTING PASSED ID FROM THE SEARCH PAGE 


 $STM = $dbh->prepare(" SELECT * FROM staff_details WHERE id=:id " );
  $STM->bindParam(':id', $id); //BINDING PARAMETERS
   $STM->execute();
   $count = $STM->rowCount();
   $rows  = $STM -> fetchAll();
   
    $dbh = null;

?>