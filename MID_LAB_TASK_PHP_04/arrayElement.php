<?php

	$studentArr =  [1, 'Faiyaz', 3.98, "shahrearfaiyaz@gmail.com"];
	$element = 'Faiyaz';
	$check = false;
	foreach ($studentArr as $value) 
	{
		if($value === $element)
		{
			echo "Search element found <br> Element: $value";
			$check = true;
			break;
		}
	}

	if($check==false) echo "<br> Element not found...";
?>