<?php 
	echo "<h2>Binary to Hexadicemal and Hexadicemal to Binary</h2>";
	echo "<h4>Binary to Hexadicemal bin2hex(string)</h4>";
	/*
			*** this function will convert ascii(sky) characterc hexadicemial
			********* what is ascii character:: keyboard all characters number/alphabeat is ascii characteer
			** For security purpose used this function  no -one can't read it this purpose used it
			
			
	*/
	////////////Bin2Hex//////////
	$str = "Hello World";
	$Sbin2hex = bin2hex($str);
		echo $Sbin2hex;
	///////////end//////////
	////////////Hex2bin///////////
	echo "<h4>Hexadicemal to binary hex2bin(string)</h4>";
		echo hex2bin($Sbin2hex);
	///////////////end/////////////////
	echo "<br>";
	echo "<br>";
	///////////////////////////////////////////////////////////////////////////////////////////
	
	
	
	///////////////chr and ord function//////////////////////
	echo "<h2>chr and ord function</h2>";
	
	echo "<h4>chr function chr(ascii) ---Character</h4>";
	
	/*
		*chr any ascii value to convert character
		******search google ascii value table *****
		
	*/
	$chrFt = chr(65);
	echo $chrFt . "<br>";
	
	echo "<h4>ord function ord(string) ---ascii value of string first character</h4>";
	/*
		*This function will show string first character ascii value
		*This is offoside or chr function
	*/
	$chrFtp = ord("Hello");//first char
	echo $chrFtp;
?>