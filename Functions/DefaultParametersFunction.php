<?php

	declare(strict_types = 1);

	//default  values should be last
	function oddNumbers($number , $skipNum = 2){
		for ($i=0; $i <= $number ; $i++) { 
			if ($i == $skipNum) {
				continue;
			}
			if ($i % 2 != 0) {
				echo "Odd number: $i" . "<br>";
			}
		}
	} 

	function evenNumbers($number = 12){
		for ($i=0; $i <= $number ; $i++) { 
			if ($i % 2 == 0) {
				echo "Even number: $i" . "<br>";
			}
		}
	}

	oddNumbers(13);
	evenNumbers();

