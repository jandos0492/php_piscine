#!/usr/bin/php
<?php
if ($argc != 4)
	echo "Incorrect Parameters\n";
else
{
    $num1 = trim($argv[1]);
    $sign = trim($argv[2]);
	$num2 = trim($argv[3]);
	if ($num2 == 0 && ($sign == "/" || $sign == "%"))
		echo "Error! You can't devide by zero\n";
	else if ($sign == "+")
		echo $num1 + $num2."\n";
	else if ($sign == "-")
		echo $num1 - $num2."\n";
	else if ($sign == "*")
		echo $num1 * $num2."\n";
	else if ($sign == "/")
		echo $num1 / $num2."\n";
	else if ($sign == "%")
		echo $num1 % $num2."\n";
}
?>