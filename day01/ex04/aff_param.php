#!/usr/bin/php
<?php
$i = 1;
while ($i < count($argv)) 		/* Count all elements in an array, or something in an object */
{
	echo ("$argv[$i]\n");
	$i++;
}
?>