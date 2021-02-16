<?php

	$arr = [

			[1,2,3,'A'],
			[1,2,'B','C'],
			[1,'D','E','F']
	];

	$limit = 2;

	for ($i=0; $i<3; $i++) 
	{
		$temp = $limit;
		for ($j=0; $j<=$temp; $j++) 
		{ 
			echo $arr[$i][$j];
		}
		echo "<br>";
		$limit--;
	}

?>