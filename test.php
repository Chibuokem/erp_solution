<?php

class Chibuokem{
	private $name,$height;
	
	public function __construct($name,$height){
		$this->name = $name;
		$this->height =$height;
	}
	
	public function getName(){
		return $this->name;	
	}
	public function getHeight(){
	  return $this->height;	
	}
	
	public function changeName($name ){
	   	$this->name=$name;
		
	}
}
        class King {
          // Modify the code on line 10...
          public static function proclaim() {
            echo "A kingly proclamation!";
          }
        }
        // ...and call the method below!
        King::proclaim();
/*$chi = new Chibuokem("chi",9.6);
$chichi = new Chibuokem("chichi",9.6);
$chike = new Chibuokem("chike",9.6);

echo $chi->getName();
echo $chike->getHeight();

$chike->changeName('bros');
echo $chike->getName();
var_dump(PDO::getAvailableDrivers())*/