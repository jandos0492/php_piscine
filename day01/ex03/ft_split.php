<?php
function ft_split($str)
{
	$word = explode(" ", $str); 							/* Split a string by a space */
	$sorted_array = array_values(array_filter($word)); 		/* array_values — Return all the values of an array */
	sort($sorted_array); 									/* sorting array*/
	return ($sorted_array);
}
?>