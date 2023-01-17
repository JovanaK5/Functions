<?php

	declare(strict_types = 1);

	function oddNumbers($number , $skipNum){
		for ($i=0; $i <= $number ; $i++) { 
			if ($i == $skipNum) {
				continue;
			}
			if ($i % 2 != 0) {
				echo "Odd number: $i" . "<br>";
			}
		}
	} 

	oddNumbers(29, 1);