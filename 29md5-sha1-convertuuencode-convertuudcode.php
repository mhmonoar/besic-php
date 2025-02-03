<?php


echo "<h2>Md5 & Sha1</h2>";
/////////////////////start md////////////////////
	echo "<h4>Md5 function md5(string,row)</h4>";

/*
	*only 32 character under its convert
	*MD5 = Message-Digest  Algorithm
	*for password encrypt use md5
	* There row have 2 value true and false by default value is false
	** If set value true then show 16 character binary 
	** If set false or nothing its will make 32 character hexa
*/

$strmd5 = "Hello World";
echo 'Normal print::<br>';
	echo $strmd5 ."<br>";
echo 'Md5 binary print::<br>';
	echo md5($strmd5, true) . "<br><br>";//Its will show 16 character binary number
echo 'Md5 hexa print::<br>';
	echo md5($strmd5);//there you can use false or nothing, its will show 32 character hexa 
//////////////////////////////////end md5/////////////////////////////////////////

////////////////////////////////start sha1/////////////////////////////////
	echo "<h4>sha1 function sha1(string,row)</h4>";

/*
	* sha1 = US Secure Hash algorithm 1
	* This is more then secure md5
	* for password encrypt use sha1
	* There row have 2 value true and false by default value is false
	** If set value true then show 20 character binary format
	** If set false or nothing its will make 40 character hex number
	** just 40 character under convert it
*/
$strsha1 = "Hi World";
echo 'Normal print::<br>';
	echo $strsha1 ."<br>";
echo 'Md5 binary print::<br>';
	echo sha1($strsha1, true) . "<br><br>"; //It's will Show 20 character binary format
echo 'Md5 hexa print::<br>';
	echo sha1($strsha1);//there you can use false or nothing, It's will make 40 character hex number
///////////////////////////////////////end sha1////////////////////////////////////

///////////////start uucode///////////////
echo "<h2>Convert_uuencode & Convert_uudecode Function</h2>";

/*
	* any sms secrectly save on database or trismite sms purpose used this function
	**This function uuAlgoridom base maked
	*There is no limit
	*sms purpose use it
*/
$struuEc = "Hello World";
echo "Normal Print <br>";
	echo $struuEc;
echo "<br>";
echo "<br>";
//////////////////
echo "UUencode after Print <br>";	
	$struuEcode = convert_uuencode($struuEc);
	echo $struuEcode;
echo "<br>";
echo "<br>";
//////////////////
echo "UUdecode after Print <br>";	
	$struudcode = convert_uudecode($struuEcode);
	echo $struudcode;




?>