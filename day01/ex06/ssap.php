#!/usr/bin/php
<?php
$array = array();
unset($argv[0]); 								/* unset() destroys the specified variables. */
foreach($argv as $var)
{
    $temp = array_filter(explode(' ', $var)); 	/* split a string by a symbol */
    foreach ($temp as $var2)
        $array[] = $var2;
}
sort($array); 									/* sorting array */
foreach ($array as $var)
	echo $var."\n";
?>