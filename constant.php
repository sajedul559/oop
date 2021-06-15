<?php 

class person {
	const t = 5;

	public function password($set ){
		if (strlen($set) < self::t) {
			# code...
			echo "password must be in".self::t."characters";
		}
		else{
			echo "login success";
		}

	}
}

$obj = new person();
echo $obj->password(12345);





?>