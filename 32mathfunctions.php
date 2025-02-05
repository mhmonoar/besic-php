<?php 
///////////////////PHP MATH FUNCTION///////////////////
	echo "<h2>PHP MATH FUNCTIONS</h2>";
///////////////////////MIN FUNCTIONS////////////////////////
	echo "<h4>Min(value1, value2......)</h4>";
	echo min(10,20,5,8,2,3,50,100);// It's will show min number
///////////////////////Max FUNCTIONS////////////////////////+
	echo "<h4>max(value1, value2......)</h4>";
	echo max(10,20,5,8,2,3,50,100);//It's will show max number
///////////////////////CEIL FUNCTIONS////////////////////////
	echo "<h4>ceil(value)</h4>";
	echo ceil(3.5);// It's will shou 3.5 upper
///////////////////////FLOOR FUNCTIONS////////////////////////
	echo "<h4>floor(value)</h4>";
	echo floor(3.5);//It's will show 3.5 down 
///////////////////////FLOOR FUNCTIONS////////////////////////
	echo "<h4>round(value)</h4>";
	echo round(1.5);//up
		echo "<br>";
	echo round(1.4);//down
	//if number less then 0.5 then It's will return down
	//if number grater then 0.5 then It's will return up
///////////////////////ABS FUNCTIONS////////////////////////
	echo "<h4>abs(value)</h4>";
	// if any value have +,- then abs function will remove it and show solid number
	echo abs(-5);
///////////////////////intdiv FUNCTIONS////////////////////////
	echo "<h4>intdiv(value1,value2)</h4>";
	//for diviation use this function
	echo intdiv(8,4);
	
///////////////////////SQRT FUNCTIONS////////////////////////
	echo "<h4>SQRT(value)</h4>";
	//It's will pickup Squire root vlue
	echo sqrt(9);
///////////////////////POW FUNCTIONS////////////////////////
	echo "<h4>POW(value1,value2)</h4>";
	//FOR giving power then use this functions
	//There 1 value is normal value 2nd is power
	echo pow(9,2);

///////////////////////RAND FUNCTIONS////////////////////////
	echo "<h4>Rand(minvalue,maxvalue)</h4>";
	//It's will show min and max undar random value
	echo rand(0,10);
///////////////////////MT-RAND FUNCTIONS////////////////////////
	echo "<h4>mt_rand(minvalue,maxvalue)</h4>";
	//It's will show min and max undar random value
	// It's 4x faster then randorm function
	echo mt_rand(1,10);
///////////////////////LCG-VALUE FUNCTIONS////////////////////////
	echo "<h4>LCG_VALUE()</h4>";
	//It's will show 0 to 1 under a random value
	//It's will not show less then 0 or upper then 1 values it's border is just 0-1
	echo lcg_value();

?>