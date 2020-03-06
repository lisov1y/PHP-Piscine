#!/usr/bin/php
<?php
date_default_timezone_set("America/Los_Angeles");

$path = fopen("/var/run/utmpx", "r");
while ($src = fread($path, 628)) {
    $inf[] = unpack("A256user/A4ghf/A32tty/Ipid/Itype/Ltime/Lother/A256host/A64pad", $src);
}
sort($inf);
foreach($inf as $val) {
    if ($val['user'] !== "utmpx-1.00" && $val['user'] != null && $val['type'] == 7) {
		echo $val['user'] . " " . $val['tty'] . "  " . date("M  j H:i", $val['time']) . " \n";
	}
}
?>