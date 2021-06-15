<?php 
class Man{
public $name ="sajedul islam";
public $age;

 function __construct($name, $age){

 	$this->name = $name ;
 	$this->age = $age;
 }
 


function get_name(){
	return $this->name;
}
function get_age(){
	return $this->age;
}


}


$apple = new Man("sajedul","33");
echo $apple->get_name();
echo $apple->get_age();


?>