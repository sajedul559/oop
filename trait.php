<?php 
trait sajedul{
	public function mango(){
		echo " mango is most popular fruit in bangladesh <br>";
	}
}

class fruit{
	use sajedul;
}

class man{
	use sajedul;
}


$object = new fruit();
$object->mango();

$obj = new man();
$obj->mango();




?>