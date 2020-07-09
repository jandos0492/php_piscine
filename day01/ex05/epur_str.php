#!/usr/bin/php
<?php
if ($argc > 1)
{
	$array = array_filter(explode(' ', $argv[1])); 	/* Filters elements of an array using a callback function */
    $result = "";
    foreach($array as $var)
        $result = $result .$var." "; 				/* . concatanation */
    echo trim($result)."\n"; 						/* trim — Strip whitespace (or other characters) from the beginning and end of a string */
}