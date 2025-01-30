<?php
	echo "<h2>String Length and String Word Count Functions</h2>";
	
	/////////
	echo "<h4>strlen(string)</h4>";
	$i = "Hello world is Beautiful is";
	echo strlen($i);
	///////
	echo "<h4>str_word_count(string,return)</h4>";
	echo str_word_count($i);
	//////////
	echo "<h4>sub_str_count(string, substring,start,length)</h4>";
	echo substr_count($i,"is");// how many time substring have show it
	
	
	
	echo "<h2>String Split Function short form str_split(string,length)</h2>";
	/*
		*If need to string Every characters to different array index print then use thes function
		*str_split(string,length) --length is optional its deifine how much characters take at a time
	*/
	//////////////////str_split////////////////////
	 $a= "A Quick Brown";
	 $str_split_test = str_split($a);
	 //$str_split_test = str_split($a,2);//if use length its will excuite number of length characters
	 echo "<pre>";
		print_r($str_split_test);
	 echo "</pre>";
	 ////////
	 echo "<br>";
	 echo "<br>";
	 ////////
	 
	 echo "<h2>String Split Function short form chunk_split(string,length,end)</h2>";
	 //////////////////////chunk_split///////////////////////
	 /*
		After every string character if need add anything then use chunk_split
		must be use length there leanth mean howmuch characters after add extra things
	 */
	 $b ="Jump Over The Lezy";
	 $str_chunk_split_test = chunk_split($b,1,".."); //there extra thing is  ..
	echo "<pre>";
		print_r($str_chunk_split_test);
	 echo "</pre>";
	 ////////
	 echo "<br>";
	 echo "<br>";
	 
	 
	 
	 ////////////////////////////////////////////////////////////////////////////////////
	 echo "<h2>String Cases</h2>";
	 
		echo "<p>strtolower() -- string will convert lowar Cases</p>";
		echo "<p>strtoupper() -- string will convert Uppercase Cases</p>";
		echo "<p>ucfirst() -- string first charahter will convert upper</p>";
		echo "<p>ucwords() -- string every words first character will convert lowar Cases</p>";
		echo "<p>lcfirst() -- string first charahter will convert lower</p>";
		
		$c = "a quick brown fox";
		
		$convertUpper = strtoupper($c);
		echo $convertUpper;
		//////////////*** try like this all charchter****//////////
		
	////////
	 echo "<br>";
	 echo "<br>";
	 //////
	  ///////////////////////////////////////////////////
	  
		echo "<h2>String Search and Find position Those string Function Return will String Position</h2>";
		
		echo "<p>strpos(string,find,start) -- search from start its case sensetive</p>";
		echo "<p>strrpos(string,find,start) -- search from end its case sensetive</p>";
		echo "<p>stripos(string,find,start) -- search from start its case is not sensetive</p>";
		echo "<p>strripos(string,find,start) -- search from end its case is not sensetive</p>";
		
		$d = "A Quick Brown Fox Brown";
		echo strpos($d,"Brown",14); // stat means how to start searching
		echo "<br>";
		echo strrpos($d,"Brown"); // stat means how to start searching
		echo "<br>";
		echo stripos($d,"brown"); // stat means how to start searching
		echo "<br>";
		echo strripos($d,"brown"); // stat means how to start searching
		/////////////try every string ////////////////
		
	 echo "<br>";
	 echo "<br>";
		
		
		
		
		
		
		
		
	 
	 
?>