<?Php 
class person{
 public $isAlive =true;
 public $firstname;
 public $lastname;
 public $age;
 public $department;
 	//assigning the values 
public function __construct($firsname, $lastname, $age,$department ){
	$this->firstname=$firsname;
	$this->age=$age;
	$this->lastname=$lastname;
	$this->department=$department;
	
	
	
}


//creating a method
public function greet(){
 return  "Hello my name is ".$this->firstname." and my lastname is ".$this->lastname." and my age is ".$this->age. " and my department is ".$this->department; 	
	
}

//creating a new person
}
$me= new person("chibuokem","ibezim",200,"ict");

//echo $me->greet();



        class perso{
            public $isAlive=true;
            public $firstname;
            public $lastname;
            public $age;
            public function _construct($firstname,$lastname,$age){
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            $this->age=$age;
            
        }
        
        }
        $teacher= new perso("boring","12345",12345);
        $student=new perso("chibuokem","ibezim",23);
       echo $teacher->isAlive;
       echo $student->age; 
       
       


?>