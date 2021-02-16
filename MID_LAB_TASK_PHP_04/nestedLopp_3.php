<?php
	
	$char = 'A';

	for ($i=0; $i<3; $i++) 
	{ 
		for ($j=0; $j<=$i; $j++) 
		{ 
			echo $char++;
		}
		echo "<br>";
	}
	
?>