<?php

	$arr = [

			[1,2,3,'A'],
			[1,2,'B','C'],
			[1,'D','E','F']
	];

	$limit = 3;

	for ($i=0; $i<3; $i++) 
	{
		$temp = $limit;
		for ($j=$temp; $j<=3; $j++) 
		{ 
			echo $arr[$i][$j];
		}
		echo "<br>";
		$limit--;
	}

?>