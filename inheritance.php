
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inheritance</title>
</head>
<body>
	<h2>This is the example of inheritance</h2>
</body>
</html>


<?php 

  class  Sajedul{

  	public $name;
  	public $age;



  }

  class  Khairul extends Sajedul{

  	public $address;
  	public $department;
  }


$class = new Khairul();
$class->name = "sajedul islam";
$class->age = "24";
$class->address = "Narsingdi";
$class->department = "CSE";

echo "Name is: $class->name <br>";
echo " Age is: $class->age <br>";
echo "Address is: $class->address<br>";
echo "Department is: $class->department";




?>