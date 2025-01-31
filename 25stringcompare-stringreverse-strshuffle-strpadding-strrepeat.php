<?php 
	echo "<h2>String Compare</h2>";
	/*
		*string1 is bigger then show negative value = -1
		*sting 2 is bigger then show positive value = 1
		*strig both are same then show zero = 0
	*/
	$a = "hello";
	$b = "Hello";
	////////////////
	echo "<h4>1. strcmp(string1,string2)--Case sensitive</h4>";
		echo strcmp($a,$b); // result = 1
		////////
	$a1 = "Hello world";
	$b1 = "hello world";
	echo "<h4>2. strncmp(string1,string2,length)--Case sensitive</h4>";
		echo strncmp($a1,$b1,2); // result = -1
		///////
	$a3 = "Hello world";
	$b3 = "hello World";
	echo "<h4>3. strcasecmp(sting1,string2)--Case insensitive</h4>";
		echo strcasecmp($a3,$b3);//result= 0 because case insensitive
		///////
	echo "<h4>4. strncasecmp(string1,string2,length)--Case insensitive</h4>";
		echo strncasecmp($a3,$b3,3); //result= 0 its case insensitive match untill length
		///////
	echo "<h4>5. strnatcmp</h4>";
		
	echo "<h4>6. strnatcasecmp</h4>";
	
	echo "<h4>7. substr_compare(str1,str2,start,length,case)</h4>";
		echo substr_compare($a3,$b3,5); //show -1
		echo "<br>";
		echo substr_compare($a3,$b3,5,false); //by default 4th paramitter, there case is true and false
		///////
	$a4= "Hello wOrld";
	$b4= "HEllo Earth";
	echo "<h4>8. similar_text(string1,string2,persent)--its will match charactar and spaces</h4>";
		echo similar_text($a4,$b4,$per). "<br>"; //result= 6
		echo "percentage:" . $per;
	
	////////////////////////////////////////////End string Compare////////////////////
	
	
	/////////////sring reverse and Shuffle/////////////////
	echo "<h2>String Reverse And Shuffle </h2>";
	
	$x = "Hello World";
	echo "<h4>strrev(string)-- it-s will reverse string</h4>";
		echo strrev($x) . "<br>";
	
	echo "<h4>str_shuffle(string)-- Its will show messy output everytime different after reload page </h4>";
		echo str_shuffle($x) . "<br>";
	
	//////////////end rev and Shuffle/////////////////
	
	///////////////////String Padding and String Repeat/////////////////
	echo "<h2>String Padding and String Repeat</h2>";
	echo "<h4>str_pad(string,length,pad_string,pad_type)</h4>";
	/*
		for string length increment add 
		***must be add padding greater then string
		string pad function 3th paramitter pad_type have 4type:
		1. STR_PAD_BOTH-- its will give both side padding
		2. STR_PAD_LEFT -- its will give left side padding
		3. STR_PAD_RIGHT -- its will give right side padding
		
	*/
	$i1 = "Hello world";
	echo "<h4>str_repeat(string,repeat)</h4>";
		echo str_pad($i1,20,".") . "<br>";
		echo str_pad($i1,20,".", STR_PAD_BOTH);//using padding
	
	/* same string repating */
	$i2 = "Hello ";
	echo "<h4>str_repeat(string,repeat-number)</h4>";
		echo str_repeat($i2,5);
?>