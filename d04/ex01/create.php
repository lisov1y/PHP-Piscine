<?php
	$login = $_POST["login"];
	$passwd = $_POST["passwd"];
	$submit = $_POST["submit"];
	if (!$login || !$passwd || $submit !== "OK")
		exit("ERROR\n");
	if (!file_exists("../private") || !file_exists("../private/passwd")){
		mkdir("../private");
		$pos = -1;
	}
	else{
		$storage = unserialize(file_get_contents("../private/passwd"));
		foreach ($storage as $pos => $user)
			if ($user["login"] === $login)
				exit("ERROR\n");
	}
	$storage[$pos + 1]["login"] = $login;
	$storage[$pos + 1]["passwd"] = hash("whirlpool", $passwd);
	file_put_contents("../private/passwd", serialize($storage));
	echo ("OK\n");
?>