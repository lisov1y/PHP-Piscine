<?php
	$login = $_POST["login"];
	$oldpw = $_POST["oldpw"];
	$newpw = $_POST["newpw"];
	$submit = $_POST["submit"];
	if (!$login || !$oldpw || !$newpw || $submit !== "OK")
		exit("ERROR\n");
	$oldpw = hash("whirlpool", $oldpw);
	$newpw = hash("whirlpool", $newpw);
	$storage = unserialize(file_get_contents("../private/passwd"));
	foreach ($storage as &$user) {
		if ($user["login"] === $login && $user["passwd"] === $oldpw && $oldpw !== $newpw){
			$user["passwd"] = $newpw;
			file_put_contents("../private/passwd", serialize($storage));
			exit("OK\n");
		}
	}
	exit("ERROR\n");
?>