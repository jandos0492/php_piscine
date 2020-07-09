#!/usr/bin/php
<?php
    date_default_timezone_set('America/Los_Angeles');
    $file = fopen("/var/run/utmpx", "r");
	while ($utmpx = fread($file, 628))
	{
        $unpack = unpack("a256intra/a4id/a32console/ipid/itype/itime", $utmpx);
        $array[$unpack['console']] = $unpack;
	}
	//print_r($unpack);
    ksort($array);						//Sorts an array by key, maintaining key to data correlations. This is useful mainly for associative arrays.
    foreach ($array as $v)
    {
        if ($v['type'] == 7) 
        {
            echo str_pad(substr(trim($v['intra']), 0, 8), 8, " ")." ";  // Pad a string to a certain length with another string
            echo str_pad(substr(trim($v['console']), 0, 8), 8, " ")." ";  // substr — Return part of a string
            echo date("M", $v["time"]);
            echo str_pad(date("j", $v["time"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $v["time"]);
            echo "\n";
        }
    }