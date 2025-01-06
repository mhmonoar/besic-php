<?php
/////////////////////////////////////////////////////////////////////////////////////////
	//basic function_exists
	function show(){
		echo "Hello besic function test ";
	}
	show();
	
	
	echo "<br>";
	echo "<br>";
	
	///////////////////////////////////////////////////////////////////////////////////////
	//Function With Peramitters
	
	function outshow($a,$b){
		echo $a+$b;
		echo "<br>";
		echo $a-$b;
	}
	outshow(20,10);
	
	echo "<br>";
	echo "<br>";
	//////////////////////////////////////////////////////////////////////////////////////
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
	
	echo "<br>";
	echo "<br>";
	////////////////////////////////////////////////////////////////////////////////////////
	///Function Arguments By Referance
	
	function myfun(&$pperramitter){  
	//without & it's show testing but when use & it's show hay this is monoar
	// when use & there &$pperramitter have address that's why shwo hay this is monoar
		$pperramitter = "Hey this is monoar";
	}
	$vvariable = "Testing";
	
	myfun($vvariable);
	echo $vvariable;
	echo "<br>";
	echo "<br>";
	///////////////////////////////////
	
	///Function Arguments By Referance   2nd example
	
	function first($num){
		$num+=5;  //there will no chaange just print 10
	}
	function second(&$num){
		$num+=7; //there will change and show 17 because there have $number address
	}
	$number = 10;
	
	first($number);
	echo "First output".$number;
	echo "<br>";
	
	second($number);
	echo "second output".$number;
	echo "<br>";
	
	echo "<br>";
	echo "<br>";
	/////////////////////////////////////////////////////////////////////
	
	//Variable Function
	function showtime(){
		echo "Hello it's show time function variable test";
	}
	$shofun = "showtime";
	$shofun();
	echo "<br>";
	echo "<br>";
	/////////////////////////
	//Variable Function
	
	$showfun = function(){ // this is anonemous function exemple
		echo "Hello this is anonemous function test";
	}; // must be use semicolone ;
	$showfun();
	
	echo "<br>";
	echo "<br>";
	//////////////////////////////////////////////////////////////////////
	
	//Recursive Function 
	
	/*
		function test(){
			statment;
			test();
		}
		test();
	*/
	
	///////////ex one///////////
	
	function dis($num1){
		if($num1<=5){
			echo "$num1 <br>";
			dis($num1+1); // this is called recursive function there same function call agiin
		}
	}
	dis(1);
	
	echo "<br>";
	echo "<br>";
	///////////ex two///////////
	
	function display1($number1){
		echo "Helllo recursive function <br>";
		if($number1<=5){
			$number1++;
			display1($number1);
		}
	}
	display1(1);
?>