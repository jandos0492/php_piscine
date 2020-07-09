#!/usr/bin/php
<?php
function replace($match)
{
	$new_line = $match[1].strtoupper($match[2]).$match[3]; 
	return ($new_line);
}
if ($argc > 1)
{
    $line = "";
	$fd = fopen($argv[1], "r");
	while (!feof($fd))
	{
        $line .= fgets($fd);
	}
	fclose ($fd);
	$line = preg_replace_callback("/(<.*title=\")(.*)(\">)/i", "replace", $line);
	$line = preg_replace_callback("/(<a.*>)(.*)(<\/a)/i", "replace", $line);
	$line = preg_replace_callback("/(<a.*>)(.*)(<img)/i", "replace", $line);
	echo "$line";
}
?>