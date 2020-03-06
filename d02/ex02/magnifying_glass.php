#!/usr/bin/php
<?php
	if ($argc != 2)
		exit ("Invalid number of argumesnts!\n");
	else if (!file_exists($argv[1]))
		exit ("File doesn't exist!\n");
	else {
		$str = file_get_contents($argv[1]);
		$str = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/",
			function($ups){
				$ups[0] = preg_replace_callback("/( title=\")(.*?)(\")/",
					function($ups)
					{
						return ($ups[1] . strtoupper($ups[2]) . $ups[3]);
					}, $ups[0]);
				$ups[0] = preg_replace_callback("/(>)(.*?)(<)/",
				 	function($ups)
					{
						return ($ups[1] . strtoupper($ups[2]) . $ups[3]);
					}, $ups[0]);
					return ($ups[0]);
				},
				$str);
		echo ($str);
	}
?>