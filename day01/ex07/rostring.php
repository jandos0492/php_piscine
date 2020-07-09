#!/usr/bin/php
<?php
if ($argc > 1)
{
	$string = trim($argv[1]); 						/* delete spaces at beggining and end of string */
	$string = preg_replace('/\s+/', ' ', $string);  /* replace all comas with one space */
	$array = explode(" ", $string); 				/* split a string by a space */
    $first_elem = array_shift($array); 				/* delete first elem from array */
	$string = implode(" ", $array); 				/* Join array elements with a string */
	if ($string)
		echo $string." ";
	echo $first_elem."\n";
}
?>