<?php
//////////////////////////Range(start,end,step)/////////////////////
echo "<h2>Range Function Range(start,end,step)</h2>";
	/*
		*Fixed 2 value to make a array then use range FunctionRange
		*Range function work with Numeric and alphabetic
		*step optinoal value stape is incriment how much start
	*/
	
	echo "<h4>Range Function Numeric without step </h4>";
	$rangeWs =range(1,10);
	echo "<pre>";
		print_r($rangeWs);
	echo "</pre>";
	////////////////////////
	echo "<br>";
	echo "<br>";
	////////////
	echo "<h4>Range Function Number with step</h4>";
	$rangeWiS =range(1,10,2);
	echo "<pre>";
		print_r($rangeWiS);
	echo "</pre>";
	/////////
	echo "<br>";
	echo "<br>";
	////////////
	echo "<h4>Range Function Alphabetic</h4>";
	$rangeWiA =range("A","L");//Capitial or Small leatter need to specifiy
	echo "<pre>";
		print_r($rangeWiA);
	echo "</pre>";
	
	////////////
	echo "<h4>Range Function Using foreach</h4>";
	foreach(range('h','a') as $leater){
		echo $leater . "<br>";
	}
	echo "<br>";
	echo "<br>";
	//////////////////////////////End//////////////////////////////
	echo "<h2>Explode Funciton  Expload(saparator,string,limit)</h2>";
	/*
		*if need string to array convert then use Expload Function
		*Saparator means where to break
		*variable or string
		*limit means how much index you want to print it's optonal
	*/
	echo "<h4>Explode Funciton without limit</h4>";
	$a = "Lorem Ipsum is simply dummy text of the printing and typesetting industry";
	$sToA = explode(" ", $a);
	
	echo "<pre>";
		print_r($sToA);
	echo "</pre>";
	///
	echo "<br>";
	echo "<br>";
	
	///
	
	echo "<h4>Explode Funciton with limit</h4>";
	$x = "Lorem Ipsum is simply dummy text";
	$sToAL = explode(" ", $x,2);
	
	echo "<pre>";
		print_r($sToAL);
	echo "</pre>";
	///
	echo "<br>";
	echo "<br>";
	///////////////////////////////////////
	echo "<h2>Implode Funciton  Implode(saparator,array)</h2>";
	
	/*
		*if need Array to String convert then use Implode Function
		*Saparator means where to break, thare you can use anything
		*Join an Implode function are same
	*/
	
	$n = ["A", "Quick", "Brown", "Fox", "Jumps", "Over", "The", "Lazy", "Dog"];
	$AtoS= implode(" ", $n);
	echo $AtoS;
	
	/////////////
	echo "<br>";
	echo "<br>";
	////////////
	echo "<h4>Implode Function and Join Function are same Join(saparator,array)</h4>";
	$nJ = ["A", "Quick", "Brown", "Fox", "Jumps", "Over", "The", "Lazy", "Dog"];
	$AtoSJ= join("<br>", $nJ);
	echo $AtoSJ;
?>