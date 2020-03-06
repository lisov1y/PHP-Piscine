#!/usr/bin/php
<?php
	function ft_split($str){
		$spl = preg_split('/\s+/', $str);
		sort($spl);
		return $spl;
	}
	function ft_sort($i, $j){
	$ilen = strlen($i);
	$jlen = strlen($j);
	$x = 0;
	while ($x < $ilen && $x < $jlen)
	{
		if (ctype_alpha($i[$x]))
			$itype = 1;
		else if (ctype_digit($i[$x]))
			$itype = 2;
		else
			$itype = 3;
		if (ctype_alpha($j[$x]))
			$jtype = 1;
		else if (ctype_digit($j[$x]))
			$jtype = 2;
		else
			$jtype = 3;
		if ($itype != $jtype)
			return ($itype - $jtype);
		else if ($i[$x] != $j[$x])
			return strcasecmp($i[$x], $j[$x]);
		$x++;
	}
	if ($ilen < $jlen)
		return 1;
	else if ($ilen > $jlen)
		return -1;
	else
		return 0;
	}
	$ret = array();
	for ($i = 1; $i < count($argv); $i++){
		$str = ft_split((preg_replace('/\s+/', ' ', $argv[$i])));
		for ($j = 0; $j < count($str); $j++){
			array_push($ret, $str[$j]);
		}
	}
	usort($ret, "ft_sort");
	for ($z = 0; $z < count($ret); $z++){
		echo ($ret[$z]."\n");
	}
?>