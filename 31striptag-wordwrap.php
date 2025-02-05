<?php 
//////////////////Strip_Tag//////////////////
	echo "<h2>String Strip_Tag function</h2>";
	/*
		*Under string skip/remove any html tag or keep any tag then useed strip_tag
		**2nd paramitter which tag want to print write here
	*/
	echo "<h4>strip_tag(striong,allow)--allow is optinal</h4>";
	$str = "Helo <b>world</b>, Hello<i>Earth</i>";
	////////////normal//////////
		echo $str . "<br>";
	//////////////////////
		echo strip_tags($str) . "<br>"; //remove all tags
		echo strip_tags($str, "<b>") . "<br>"; // just keep <b> bold tag
	////////////////////////End//////////////////////////////
	
	echo "<h2>String Wordwrap function</h2>";
	/*
		After fixed character for break string then use wordwrap
	*/
	echo "<h4>Wordwrap(string,width,break,cut)</h4>";
	/*
		*First paramiter is string,
		*2nd paramitter is width when start break
		*3rd paramitter is break tag <br> or /n
		*4th paramitter cut means true or false by deafult value false
	*/
	
	$strW = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout";
	/////////////using just width////////
	echo wordwrap($strW,20) . "<br>";
	/////////////using just width and <br> tag////////
	echo wordwrap($strW,20, "<br>") . "<br>"; // there word will not break just after word break
	/////////////using just width and br and true ////////
	echo wordwrap($strW,10, "<br>", true) . "<br>";
	
?>