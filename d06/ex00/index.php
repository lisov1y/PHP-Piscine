<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
</head>
<body>

<?php

class User{
	public $name;
	public $password;
	public $email;
	public $city;


	function __construct($name, $paswword, $email, $city){
		$this->name = $name;
		$this->password = $password;
		$this->email = $email;
		$this->city = $city;
		}
}

$user1 = new User("Drake", "qwerty", "lohebaniy@gmail.com", "Muhosransk");
var_dump($user1);

?>

</body>
</html>