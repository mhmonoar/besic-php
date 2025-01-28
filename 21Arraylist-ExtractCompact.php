<?php
	/*
		*Take Value from arry and make different variable then used list function
		***List function work with index array and associate array
		** value and variable count numbe need to same
		
		
	*/
	////////////List function with index array /////////////
	$colorin  = ["Red", "Orange", "Black", "Green"];
	
	list($a, $b,$c,$d)= $colorin ;
	echo "Value of A variable: $a <br> ";
	echo "Value of A variable: $b <br> ";
	echo "Value of A variable: $c <br> ";
	echo "Value of A variable: $d <br> ";
	
	
	echo "<br><br>";
	////////////List function with associate array /////////////
	
	$colorasso  = ["0"=>"Red", "1"=>"Orange", "2"=>"Black", "3"=>"Green"]; // if used associate array must be key start from 0
	
	list($m, $n,$o,$p)= $colorasso ;
	echo "Value of A variable: $m <br> ";
	echo "Value of A variable: $n <br> ";
	echo "Value of A variable: $o <br> ";
	echo "Value of A variable: $p <br> ";
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo "<br><br>";
	
	/////////////////////////Array Extract and Compact /////////////////////////////
	
	/*
		*Make array key to variable then used extract
		*Extract function work with associate array
	
	*/
	////////////////extract(array, extract_rules,prefix)//////////////////////
	
	/*
		There have 4 extract rules:
		If same name variable have outof array than used those extra rules
			1. EXTR_OVERWRITE --- Same to same no change
			2. EXTR_SKIP ---  skip under same array variable print extranal same name variable
			3. EXTR_PREPIX_SAME--- under array write extra prefix if use with prefix show under array variable
			4. EXTR_PREFIX_ALL--- if used all prefix when need to print then use first need to prefix before all variable
	*/
	$colorExtract = ["w"=>"Red", "x"=>"Orange", "y"=>"Black", "z"=>"Green"];

	extract($colorExtract);
	
	echo "Value of $w <br>";
	echo "Value of $x<br>";
	echo "Value of $y <br>";
	echo "Value of $z <br>";
	echo "<br><br>";
	
	//////////////////extr_overwrite/////////
	echo "<h2>EXTR_OVERWRITE</h2>";
	$w = "blue";
	extract($colorExtract, EXTR_OVERWRITE); /// same same
	echo "Value of $w <br>";
	echo "Value of $w<br>";
	echo "<br><br>";
	
	/////////////////////EXTR_SKIP///////////
	
	echo "<h2>EXTR_SKIP</h2>";
	$g = "Black";
	$colorExtractskip = ["g"=>"Red", "h"=>"Orange", "i"=>"Black", "j"=>"Green"];
	extract($colorExtractskip, EXTR_SKIP); /// outer variable value return BLACK
	echo "Value of $g <br>";
	echo "<br><br>";
	////////////////EXTR_PREFIX_SAME////////////
	echo "<h2>EXTR_PREFIX_SAME</h2>";
	$c = "Black";
	$colorExtrPS = ["c"=>"Red", "e"=>"Orange", "f"=>"Black", "x"=>"Green"];
	extract($colorExtrPS, EXTR_PREFIX_SAME, "pre"); /// $c = outer variable, $pre_c = inner array variable
	echo "Value of $c <br>";
	echo "Value of $pre_c <br>";
	echo "<br><br>";
	
	////////////////EXTR_PREFIX_ALL////////////
	echo "<h2>EXTR_PREFIX_SAME</h2>";
	$s = "Black";
	$colorExtrPA = ["s"=>"Red", "t"=>"Orange", "p"=>"Black", "q"=>"Green"];
	extract($colorExtrPA, EXTR_PREFIX_ALL, "all"); /// must be add all every variable first otherwise error
	echo "Value of $all_s <br>";
	echo "Value of $all_t <br>";
	echo "Value of $all_p <br>";
	echo "Value of $all_q <br>";
	echo "<br><br>";
	///////////////////////////////////End extract////////////////////////////////
	
	
	
	
	////////////////////Compact/////////////////
	
	
	/*
		when multipol variable to associate varible convert then use compact function
	*/
	
	echo "<h2>Compact function</h2>";
	$i1= "Red";
	$i2= "Gray";
	$i3= "Blue";
	$i4= "Sky Blue";
	$i5= "Black";
	
	$variableToAssociate = compact("i1","i2","i3","i4");
	
	echo "<pre>";
		print_r($variableToAssociate); ///return associate array variable name= key, variable value = value
	echo "<pre>";
	
	
	
	
	
	
	
	
?>