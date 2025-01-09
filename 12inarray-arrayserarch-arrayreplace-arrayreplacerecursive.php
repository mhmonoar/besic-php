<?php
	/*
		*if using in-array return will 0/1, 
		*0 means false by defults have has 0 when nothing show thats means 0 (false), 
		*1 means true
		
		*when use array-search  return will index/key
		*when used index array  then show index number
		*when  used associate array then show key
	*/
	
	//in_array("search item", array-name);
	
	$fruits = array("Apple", "Orange", "Banana", "Goava");
	echo in_array("Goava", $fruits); //return 1 thats means true Goava have there
	echo "<br>";
	echo in_array("Pinapple", $fruits); // return nothing thats menas 0 false
	
	echo "<br>";
	echo "<br>";
	
	
	//////////ex02 using if else///////////
	
	if(in_array("Orange",$fruits)){
		echo "Search things Have in This Array";
	}else{
		echo "Search things Haven't in This Array false search";
	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	///////////////Array_Replece//////////////
	/* 
	*array_replace function not enabled to change in defults Array
	* array replace function work with index array and associate array
	*index array replace index Array
	*associate array replace associate array
	*/
	////////ex-1 index array////////
	$veggs = ["Alu", "Potol", "Sim", "Begun", "Tomato"];
	$veggs2 = ["lou", "komra"]; //replace first 2 values
	
	$veggreplace = array_replace($veggs,$veggs2);
	
	echo "<pre>";
		print_r($veggreplace);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	////////ex-2 associate array///////////
	
	$name1= ["Fname"=>"Monoar", "Lname"=>"Hossen", "Age"=>28];
	$name2= ["Fname"=>"Masud", "Lname"=>"Hasan"];
	
	$namereplace = array_replace($name1, $name2);
	
	echo "<pre>";
		print_r($namereplace);
	echo "</pre>";
	
	echo "<br>";
	echo "<br>";
	
	///////////////Array_Replece_recusive//////////////
	/* 
	*array_replace function not enabled to change in defults Array
	* array replace function work with  multidimintaial associate array
	*/
	
?>