 <?php

	function add($x, $y) : int{
		return $x + $y;
	}

	$addFunction = "add"; //reference to functions name
	echo "RESULT: " . $addFunction(6, 5);