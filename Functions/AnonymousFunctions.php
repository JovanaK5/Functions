<?php

	/*
	function add($x, $y):int{
			$addition = $x + $y;
			return $addition;
		}

		$addFunction = "add";
		echo "RESULT : " . $addFunction(7, 8);
	*/

	//converting dynamic function to anonymous function

	$addFunction = function ($x, $y) : int{
		$addition = $x + $y;
		return $addition;
	};

	echo $addFunction(5, 3);

	//accessing variable inside closure!

	$text = "My name is Jovana";
	
	$printText = function () use($text){
		echo $text;
	};

	printText();


