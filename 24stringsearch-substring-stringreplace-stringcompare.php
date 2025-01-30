<?php
	echo "<h2>String Search function  ----Its will return Drect string </h2>";
	////
	/*
	before_search optinal paramitter
	before search value true and false by deafult value false
	*/
	
	//////////First 3 function are case sensitive///////////////
	$a = "I love php,I love php too";
	
	echo "<h4>strstr(string,search,before_search)--Case sensitive</h4>";
	echo strstr($a,"php"); ///its will return first search before string 
	///
	echo "<br>";
	echo "<br>";
	///
	echo strstr($a,"php",true); ///its will return first search after string 
	////
	echo "<h4>strchr(string,search,before_search)--Case sensitive</h4>";
	echo strchr($a,"php"); ///its will return first search before string 
	///
	echo "<br>";
	echo "<br>";
	////
	///
	echo strchr($a,"php",true); ///its will return first search after string 
	////
	echo "<h4>strrchr(string,search)--Case sensitive reverse check</h4>";
	////
	echo strrchr($a,"love"); ///reverse order check and return from search 
	echo "<br>";
	//////////////////those function is not case sensitive///////////////
	$b = "I love PHP, I love php too";
	echo "<h4>stristr(string,search,before_search)--Case insensitive</h4>";
	echo stristr($b,"php"); ///its will return first search before string 
	///
	echo "<br>";
	echo "<br>";
	///
	echo stristr($b,"php",true); ///its will return first search after string 
	////
	echo "<h4>strpbrk(string,search,before_search)</h4>";
	echo strpbrk($b, "v");//character search to after string retrun 
	echo "<br>";
	echo "<br>";
	////////////////////////////end//////////////////////////////
	
	
	echo "<h2>Sub String function-----substr(string,start,length)</h2>";
	
	/*
		if You need to cut some string and make a sub string then use this function
	*/
	$str = "I love bangladesh and this is so beatutiful";
	
	echo substr($str,1,15);
	
	/////////////////////String Replace/////////////////
	echo "<h2>String Replace Functions</h2>";
	/////////////////////
	
	$strReplace= "I love php, I love php too";
	echo "<h4>str_replace(find,replace,string)--case sensitive</h4>";
	echo str_replace("php","phython",$strReplace); ///replace php with phython
	echo "<br>";
	echo "<br>";
	//////////////////
	echo "<h4>str_ireplace(find,replace,string)--case insensitive</h4>";
	echo str_ireplace("Php", "Python", $strReplace);
	
	////////////////////
	echo "<h4>substr_replace(string,replacement,start,length)--case sensitive</h4>"; 
	//start menas up to(porjonto)
	//Length means start point to end
	///////////////////////////////////////
	echo substr_replace($strReplace,"Java",10); // there 10 to start and add jave then end
	echo "<br>";
	echo substr_replace($strReplace,"Java",10,20); // there 10 character after upto 20 character replace Java
	echo "<br>";
	echo "<br>";
	//////////////////////////////////////
	echo "<h4>strtr(string,from,to)--case sensitive</h4>";
	/*
		*first paramitter search paramitter
		*second paramitter replace paramitter
	*/
	
	echo strtr($strReplace,"hp", "py")
?>