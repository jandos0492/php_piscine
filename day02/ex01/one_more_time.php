#!/usr/bin/php
<?php
	$month = array(
		1 => "janvier",
		2 => "février",
		3 => "mars",
		4 => "avril",
		5 => "mai",
		6 => "juin",
		7 => "juillet",
		8 => "août",
		9 => "septembre",
		10 => "octobre",
		11 => "novembre",
		12 => "décembre");
	$week = array(
		1 => "lundi",
		2 => "mardi",
		3 => "mercredi",
		4 => "jeudi",
		5 => "vendredi",
		6 => "samedi",
		7 => "dimanche");
	$days_count = array(
		1 => 31,
		2 => 28,
		3 => 31,
		4 => 30,
		5 => 31,
		6 => 30,
		7 => 31,
		8 => 31,
		9 => 30,
		10 => 31,
		11 => 30,
		12 => 31);
	if ($argc >= 2)
	{
		$date = explode(" ", $argv[1]);
		if (count($date) != 5 ||
			preg_match("/^[1-9]$|0[1-9]|[1-2][0-9]|3[0-1]$/", $date[1], $date[1]) === 0 || // Date check
			preg_match("/^[0-9]{4}$/", $date[3], $date[3]) === 0 || // Year check
			preg_match("/^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/", $date[4], $date[4]) === 0) // Time check
		{
			echo "Wrong Format\n";
			exit();
		}
		$date[0] = array_search(lcfirst($date[0]), $week);
		$date[2] = array_search(lcfirst($date[2]), $month);
		if ($date[0] === false || $date[2] === false)
			echo "Wrong Format\n";
		else
		{
			$year_count = $date[3][0] - 1970;
			$leap_years_count = round(($date[3][0] - 1972) / 4);
			$non_leap_years_count  = ($date[3][0] - 1970) - $leap_years_count;
			$seconds_in_non_leap = 365 * 24 * 60 * 60;
			$seconds_in_leap = 366 * 24 * 60 * 60;
			$leap_sec = $leap_years_count * $seconds_in_leap;
			$non_leap_sec = $non_leap_years_count * $seconds_in_non_leap;
			$total_year_sec = $leap_sec + $non_leap_sec;
			$m = $date[2] - 1;			
			if ($date[3][0] % 4 != 0)
			{
				$d_count = 0;
				while($m > 0)
				{
					$d_count += $days_count[$m];
					$m--;
				}
			}
			else
			{
				$d_count = 0;
				while($m > 0)
				{
					$d_count += $days_count[$m];
					$m--;
				}
				$d_count += 1;
			}
			$s_count = $d_count * 24 * 60 * 60;
			$total = ($date[1][0] * 24 * 60 * 60) + ($date[4][1] * 60 * 60) + ($date[4][2] * 60) + $date[4][3];
			$total = $total + $s_count + $total_year_sec - 3600;
			if (date("N", $total) == $date[0])
			    echo $total ."\n";
			else
			    echo "Wrong Format\n";
		}
	}
?>