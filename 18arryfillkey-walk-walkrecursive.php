<?php 
	/*
		array_fill_keys--under array all value treat likes key and array_fill_keys() under 2nd peramitter will be treate like value
	*/
	//////////////////array_fill_keys////////////////
	$a = ["i", "j", "k","l"];
	$arrfkey = array_fill_keys($a, "Testing"); // testing will be same value
	echo "<pre>";
		print_r($arrfkey);
	echo "</pre>";
	echo"<br>";
	echo"<br>";
	
	//////////////////array_fill(index,number,value)////////////////
	/*
		1st peramitter start point
		2nd peramitter how much
		3rd peramitter  value
	*/
	
	$narray = array_fill(4,5,"Hello array fill"); // 4= stating point, 5 = 5 time print
	echo "<pre>";
		print_r($narray);
	echo "</pre>";
	echo"<br>";
	echo"<br>";
	
	/////////////////array_walk(array,function,paramitter)////////////////
	/*
		1. If you want to run a function for every array value then use array_walk() function
		2. array_walk function work with index and associate array
		3. paramiter is optinal if you want to give a difolt value then use paramiter
	*/
	
	$fruits = array(
		"A"=> "Lemon",
		"B"=> "Orange",
		"C"=> "Apple",
		"D"=> "Banana",
		"E"=> "Pinapile"
	);
	
	array_walk($fruits,"myfun", "= This is middle Part and optinal = ");
	
	function myfun($value,$key, $optinalparamitter){
		echo "$key $optinalparamitter $value <br>";
	}
	echo"<br>";
	echo"<br>";
	
	/////////////////array_walk_recursive(array,function,paramitter)////////////////
	$veggi =array("1"=>"Tomato", "2"=>"pumking");
	$fruitss = array(
		$veggi, 
		"A"=> "Lemon",
		"B"=> "Orange",
		"C"=> "Apple",
		"D"=> "Banana",
		"E"=> "Pinapile"
	);
	array_walk_recursive($fruitss,"FruitFun");
	
	function FruitFun($value,$key){
		echo "$key : $value <br>";
	}
?>