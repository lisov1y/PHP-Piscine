#!/usr/bin/php
<?php
	function ft_is_sort($arr){
		$cmp = $arr;
		sort($arr);
		if ($cmp == $arr)
			return (1);
		else
			return (0);
	}
?>