<?php
class person{

	private $name="sajedul";


	public function khuledice(){
		return $this->name;
	}
}




$info = new person();
 

echo $info->khuledice();




?>