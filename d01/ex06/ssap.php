#!/usr/bin/php
<?php
	function ft_split($str){
		$spl = preg_split('/\s+/', $str);
		sort($spl);
		return $spl;
	}

	if ($argc > 1) {
		$ret = array();
		for ($i = 1; $i < count($argv); $i++){
			$str = ft_split((preg_replace('/\s+/', ' ', $argv[$i])));
			for ($j = 0; $j < count($str); $j++){
				array_push($ret, $str[$j]);
			}
		}
	}
	if (empty($ret))
		exit();
	sort($ret);
	for ($z = 0; $z < count($ret); $z++){
		echo ($ret[$z]."\n");
	}
?>