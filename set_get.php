<?php 
class sajedul{
 public $name;
 public $age;

 public function set_name($ame){

 	$this->name = $ame;
 }
 public function set_age($bosor){
 	$this->age = $bosor;
 }
 public function get_age(){
 	return $this->age;
 }
 public function get_name(){
 	return $this->name;
 }


}

$khairul  = new sajedul();

$khairul->set_name('my name is sajedul islam khairul');
$khairul->set_age(24);
echo " Name: " . $khairul->get_name();
echo "<br>";

echo "Age:". $khairul->get_age();












  ?>