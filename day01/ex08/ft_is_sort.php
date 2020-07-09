<?php
function ft_is_sort($array)
{
    $sorted_array = $array;
    sort($sorted_array);
    if (array_diff_assoc($sorted_array, $array) == null)  /* Computes the difference of arrays with additional index check */
		return true;
	else
		return false;
}