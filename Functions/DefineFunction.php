<?php

	//define and call function
	function evenNumbers($number){
		for ($i=0; $i <= $number ; $i++) { 
			if ($i % 2 == 0) {
				echo "Even number: $i" . "<br>";
			}
		}
	}

	evenNumbers(50);

	//adding two numbers
	function add($x, $y){

		return $x + $y;
	}

	echo add(6, 4);