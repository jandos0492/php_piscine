#!/usr/bin/php
<?php

function cmp($str1, $str2)
{
	$i = 0;
	$string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!\
				#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
	while (($i < strlen($str1)) || ($i < strlen($str2)))
	{
		$index_of_str1 = stripos($string, $str1[$i]);		/* Find the position of the first occurrence of a case-insensitive substring in a string */
		$index_of_str2 = stripos($string, $str2[$i]);
		if ($index_of_str1 > $index_of_str2)
			return (1);
		else if ($index_of_str1 < $index_of_str2)
			return (-1);
		else
			$i++;
	}
}

if ($argc > 1)
{
    $arg_elem = 1;
    $arr = array();
    foreach ($argv as $elem)
    {
		if ($arg_elem++ > 1)
	    {
		    $temp = preg_split("/ +/", trim($elem));		/* Split string by a regular expression */
		    if ($temp[0] != "")
			    $arr = array_merge($arr, $temp);			/* Merge one or more arrays */
	    }
    }
    usort($arr, "cmp");										/* Sort an array by values using a user-defined comparison function */
    foreach ($arr as $elem)
		echo ("$elem"."\n");								/* concatenate "\n" to the string */
}
?>