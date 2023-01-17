<?php

	/*
	$result = 0;
	function add($x, $y, $result = null): int{
		$addition = $x + $y;
		return $addition;
	}

	$result = add(5 ,4);
	echo $result;
	*/

	//convert parameters as reference

	$result = 0;
	function add($x, $y, &$result = null){
		$result = $x + $y;
		return $result;
	}

	add(5 ,4, $result);
	echo $result;
