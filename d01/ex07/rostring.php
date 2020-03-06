#!/usr/bin/php
<?php
	if ($argc > 1){
		$str = trim(preg_replace('/\s+/', ' ', $argv[1]));
		$arr = explode(" ", $str);
		for ($i = 1; $i < count($arr); $i++)
			echo ($arr[$i]." ");
		echo ($arr[0]."\n");
	}
?>