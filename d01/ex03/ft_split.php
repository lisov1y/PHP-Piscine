#!/usr/bin/php
<?php
	function ft_split($str){
		$spl = preg_split('/\s+/', $str);
		sort($spl);
		return $spl;
	}
?>