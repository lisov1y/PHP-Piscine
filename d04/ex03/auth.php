<?php
	function auth($login, $passwd){
		if (!$login || !$passwd)
			return (false);
		$storage = unserialize(file_get_contents("../private/passwd"));
		$passwd = hash("whirlpool", $passwd);
		foreach ($storage as &$user) {
			if ($user["login"] === $login && $user["passwd"] === $passwd)
				return (true);
		}
		return (false);
	}
?>