<?php 
 
 class Sajedul{

 	public $name;
 	public $age;


 	public function __construct($name, $age){
 		$this->name = $name;
 		$this->age = $age;


 	}
 	public function __destruct()

 	{
 		echo " Name is: {$this->name} <br> ";
 		echo"Age is:{$this->age}";
 		//echo " the destructor class{$this->name}.";
 		}
 	}
 

 $khairul = new Sajedul(' sajedul','33');










?>