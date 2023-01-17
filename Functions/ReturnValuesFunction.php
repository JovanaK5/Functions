<?php

	function add($x, $y) : int{

		return $x + $y;
	}

	echo "Result: " . add(6, 4);


	function getEvenNumbers($number): array{
		$returnArr = [];
		for ($i=0; $i <= $number ; $i++) { 
			if ($i % 2 == 0) {
				$returnArr[] = $i;
			}
		}

		return $returnArr;
	}

	$evenNumbers = getEvenNumbers(15);
	print_r($evenNumbers);