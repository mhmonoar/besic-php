<?php
	/*
		* If you need to run a function for every array value then use array_map() function 
		* This function will return any thing
		* If you need you can use multipol array here
	*/
	////////////////////array_map(function, array)////////////////////////
	function myMapFun($n){
		return $n*$n;
	}
	$a = [1,2,3,4,5,6];
	
	$mapTest = array_map("myMapFun",$a);
	
	echo "<pre>";
		print_r($mapTest);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	function multiArrayFun($i,$j){
		return "$i = $j";
	}
	$x = [1,2,3,4,5,6];
	$fruits=["Apple", "Orange", "Banana", "Jackfruits", "Lemon"];
	
	$mapwithmultiarrry = array_map("multiArrayFun", $x, $fruits);
	echo "<pre>";
		print_r($mapwithmultiarrry);
	echo "</pre>";

	//////////////////end array map/////////////////
	echo "<br>";
	echo "<br>";
	
	///////////////Array_ruduce(array,function,initalvalue)///////////////////
	
	function reduceFunction ($p,$q){
		return $p . "-" .$q;   
		// there $p = nothing it's like carry(dori in math) 
		// If Want to set $p variable value then use use 3rd paramitter in array_reduce()function
	}
	$b =[1,2,3,4,5,6];
	
	$arrayReduce = array_reduce($b,"reduceFunction", "PValue"); // 3rd paramitter willbe treat like defult value
	echo "<pre>";
		print_r($arrayReduce);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	///////////////////2nd-Exampole////////////////
	function reduceFunction2 ($d,$e){
		return $d * $e; 
	}
	$y = [1,2,3,4,5,6];
	$arrayReduce2 = array_reduce($y,"reduceFunction2",2);
	echo "<pre>";
		print_r($arrayReduce2);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	
?>