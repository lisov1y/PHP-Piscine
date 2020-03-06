#!/usr/bin/php
<?php
	function is_month($str){
		$str = strtolower($str);
		$months = [
			"janvier" => 1,
			"février" => 2,
			"mars" => 3,
			"avril" => 4,
			"mai" => 5,
			"juin" => 6,
			"juillet" => 7,
			"août" => 8,
			"septembre" => 9,
			"octobre" => 10,
			"novembre" => 11,
			"décembre" => 12
		];
		if (empty($months[$str]))
			return (0);
		return ($months[$str]);
	}
	function is_day($str){
		$str = strtolower($str);
		$days = [
			"lundi",
			"mardi",
			"mercredi",
			"jeudi",
			"vendredi",
			"samedi",
			"dimanche"
		];
		for ($i = 0; $i < 7; $i++){
			if ($days[$i] == $str)
				return (1);
		}
		return (0);
	}
	date_default_timezone_set('Europe/Paris');

	if ($argc == 2){
		$date = explode(" ", $argv[1]);
		if (count($date) != 5)
			exit("Wrong Format\n");
		$time = explode(":", $date[4]);
		if (count($time) != 3)
			exit("Wrong Format\n");
		if (is_day($date[0]) == 0)
			exit ("Wrong Format\n");
		if ($date[1] < 1 || $date[1] > 31)
			exit("Wrong Format\n");
		$month = is_month($date[2]);
		if ($month == 0)
			exit("Wrong Format\n");
		if ($time[0] < 0 || $time[0] > 23)
			exit("Wrong Format\n");
		if ($time[1] < 0 || $time[1] > 59)
			exit("Wrong Format\n");
		if ($time[2] < 0 || $time[2] > 59)
			exit("Wrong Format\n");
		$timestamp = mktime($time[0], $time[1], $time[2], $month, $date[1], $date[3]);
		echo ($timestamp."\n");
	}
?>