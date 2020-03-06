#!/usr/bin/php
<?php
	if ($argc != 2)
		exit ("Incorrect Parameters\n");
	$argv[1] = trim($argv[1]);
	$expr = str_replace(" ", "", $argv[1]);
	$n1 = intval($expr);
	$op = substr($expr, strlen($n1), 1);
	$n2 = intval(substr($expr, strlen($n1) + strlen($op)));
	if (strlen($expr) != (strlen($n1) + strlen($op) + strlen($n2)))
		exit ("Syntax Error\n");
	if (!is_numeric($n1) || !is_numeric($n2))
		exit ("Syntax Error\n");
	switch ($op){
		case ("+"):
			echo ($n1 + $n2);
			break;
		case ("-"):
			echo ($n1 - $n2);
			break;
		case ("*"):
			echo ($n1 * $n2);
			break;
		case ("/"):
			echo ($n1 / $n2);
			break;
		case ("%"):
			echo ($n1 % $n2);
			break;
		default:
			exit ("Syntax Error\n");
	}
	echo ("\n");
?>