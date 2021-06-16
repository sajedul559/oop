<?php 
interface Fruit{
	public function tasty();

}

class Mango implements Fruit {
	public function tasty()
	{
		return " mango onek moja <br>";
	}
}

class Lichu implements Fruit {
	public function tasty(){
		return "lichu one sweet";
	}
}

$mango =  new Mango();
$lichu = new Lichu();
$fols =  array($mango, $lichu );

//echo $mango->tasty();
foreach ($fols as $f) {
	

	 echo $f->tasty();
}


?>