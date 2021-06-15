<?php 
class person{

	public $name;
	public $address;


	public function age(){
		return("amr age 29 years");
	}
}

$info = new person();
echo $info->age(); 




?>