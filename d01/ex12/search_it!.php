#!/usr/bin/php
<?php
	if ($argc < 3)
		exit();
	$i = 2;
	$key = $argv[1];
	$key = $key.":";
	$str = "";
	while($i < $argc)
	{
		if(strstr($argv[$i], $key))
		{
			$str = strstr($argv[$i], $key);
			$str = trim($str);
			$str = str_replace($key, "", $str);
		}
		$i++;
	}
	if ($str == "")
		exit();
	echo ($str . "\n");
?>
