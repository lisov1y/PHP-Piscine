<?php
	$action = $_GET["action"];
	if ($action == "set")
		setcookie($_GET["name"], $_GET["value"], time() + 3600);
	else if ($action == "get" && $_COOKIE[$_GET["name"]] != NULL)
		echo ($_COOKIE[$_GET["name"]]."\n");
	else if ($action == "del")
		setcookie($_GET["name"], '', time() - 3600);
?>