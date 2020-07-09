#!/usr/bin/php
<?php
$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin)) 									/* Tests for end-of-file on a file pointer. */
{
	echo "Enter a number: ";
	$num = fgets($stdin); 											/* Gets line from file pointer */
	if ($num)
	{
		$num = str_replace("\n", "", "$num");						/* replace second parametr on first */
		if (is_numeric($num)) 										/* Finds whether a variable is a number or a numeric stdin */
		{
			if ($num % 2 == 0)
				echo "The number " . $num . " is even\n";
			else
				echo "The number " . $num . " is odd\n";
		} 
		else
			echo "'" . $num . "' is not a number\n";
	}
}
fclose($stdin); 													/* Closes an open file pointer */
echo "\n";
?>