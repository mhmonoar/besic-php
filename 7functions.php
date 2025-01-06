<?php
	//basic function_exists
	function show(){
		echo "Hello besic function test ";
	}
	show();
	
	
	echo "<br>";
	echo "<br>";
	
	//Function With Peramitters
	
	function outshow($a,$b){
		echo $a+$b;
		echo "<br>";
		echo $a-$b;
	}
	outshow(20,10);
	
	echo "<br>";
	echo "<br>";
	//Function With Returning value
	
	function returnfun($x,$y){
		return $x +$y;
	}
	$u =200;
	$m = returnfun(10,10);
	// return value will store in $m variable now you can use this anywhire 
	//if you not store retruning value in a variable calculation or function unable to excuite
	
	$m2 = returnfun(100,200);
	echo $m + $u;
	echo "<br>";
	echo $m2+500;
	
	
?>