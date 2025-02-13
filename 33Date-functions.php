<?php 
	/////////////////////date////////////////////
	echo "<h1> Date Functions</h1>";
	///////Day///////
	echo "<h2>Day Functions</h2>";
	echo "Today is: ". date("d"). "<br>"; // 01-31 show
	echo "Today is: ". date("j"). "<br>"; // 1-31 show
	echo "Today is: ". date("dS"). "<br>"; // add (st/nt/rd/th) 
	///////Month////////
	echo "<h2>Month Functions</h2>";
	echo "Today is: ". date("F"). "<br>"; // Month full Form 
	echo "Today is: ". date("M"). "<br>"; // Month short Form
	echo "Today is: ". date("m"). "<br>"; // 01-12 add zero first
	echo "Today is: ". date("n"). "<br>"; // 1-12 without zero
	//////Year/////////
	echo "Today is: ". date("Y"). "<br>"; // full Year 
	echo "Today is: ". date("y"). "<br>"; // short year
	
	//////Weeks/////////
	echo "Today is: ". date("I"). "<br>"; // full Weekday
	echo "Today is: ". date("D"). "<br>"; // short weekday
	echo "Today is: ". date("N"). "<br>"; // Monday to start endsunday start 1-7
	echo "Today is: ". date("w"). "<br>"; // sunday to start end saturday 0-6
	//////////Full form////////////
	echo "Today is: ". date("d-F-Y-D"). "<br>";
	echo "Today is: ". date("Y/m/d"). "<br>";
	/////////////////////////////////////end//////////////////////////////////////////////
	
	
	////////////////////////////////Time///////////////////////////////
	echo "<h1>Time Functions</h1>";
	//////Houre////////
	echo "<h2>Houre Functions</h2>";
	echo "Now Time: ". date("H"). "<br>";// 01-12
	echo "Now Time: ". date("h"). "<br>"; //00-23
	echo "Now Time: ". date("g"). "<br>"; // 1-12
	echo "Now Time: ". date("G"). "<br>";//1-23
	
	//////Minits////////
	echo "<h2>Minits Functions</h2>";
	echo "Now Time: ". date("i"). "<br>";// 00-59
	//////Seconds////////
	echo "<h2>Minits Functions</h2>";
	echo "Now Time: ". date("s"). "<br>";// 00-59
	
	//////Meridiem////////
	echo "<h2>meridiem Functions</h2>";
	echo "Now: ". date("A"). "<br>";// Capitial letter
	echo "Now: ". date("a"). "<br>";// Small Letter
	
	///////Full form ////////
	echo "Now Full Time is: ". date("H:i:s A"). "<br>";// Full form
	echo "Now Full Time is: ". date("g:i:s a"). "<br>";// Full form
	
	//////////////////////////////end/////////////////////////////////////////////////////////////
	
	///////////////mktiem and gmmktime/////////////
	echo "<h2>mktime and gmmktime date(format,timestamps)</h2>";
	///////////mktime//////////////
	echo "<h4>mktime(houre,minute,second,month,day,year)-- This function will show  past time date</h4>";
	echo "Now Full Time is: ". date("d-m-Y h:i:sa"). "<br>";// Normal
	echo date("l", mktime(0,0,0,4,21,1994))."<br>"; 
	echo date("l", mktime(0,0,0,4,21,1995))."<br>"; 
	echo date("l", mktime(0,0,0,4,21,1996))."<br>"; 
	//////////Gmmktime/////////////
	echo "<h4>gmmktime(houre,minute,second,month,day,year)-- This function will show  past gmt time date</h4>";
	//gmt(greenwich mean time)
	echo "Now Full Time is: ". date("d-m-Y h:i:sa"). "<br>";// Normal
	echo date("l", gmmktime(0,0,0,4,21,1994))."<br>"; 
	
	/////////////////////////////////////////end//////////////////////////////////////////////////////////
	
	///////////////////Date_create & Date_format Function ///////////////////////
	/*
		for past date creation and future date creation used thes function
	*/
	echo "<h2>Date_create & Date_format Function</h2>";
	echo "<h4>Date_create(time,timezone)</h4>";
	echo "<h4>Date_format(object,format)</h4>";
	$dates = date_create("2050-04-21", timezone_open("Asia/Dhaka"));
	echo date_format($dates,"l") ."<br>";
	
	////////////////////////////////////////end//////////////////////////////////////////////////////////
	
	/////////////////////////////////Checkdate & Date_diff Function///////////////////////////
	echo "<h2>Checkdate & Date_diff Function</h2>";
	
		echo "<h4>checkdate(Month,Date,Year)--for validity check use this function</h4>";
		//true =1, false = nothing show
		echo checkdate(2,29,2024);
		
		echo "<h4>date_diff(Datetime1,Datetime2,Absulate)--for two date different check used this function</h4>";
		//Absulate means True/False by deafult value is fasls
		$date1 = date_create("1994-04-21");
		$date2 = date_create("2025-04-21");
		
			$diffe = date_diff($date1,$date2,true);
			/*its will return a object */
			echo $diffe->days . " Days <br>";
			echo $diffe->y . " Years <br>";
			/*
			echo $diffe-> formate("%r%a");
			//%R= positive or negitive value
			//%r = without +/-
			//%a = total numbar of different*/
			echo "<pre>";
				print_r($diffe);
			echo "</pre>";
	///////////////////////////////////////////End//////////////////////////////////////////////////////////////
	
	//////////////////////////////////////Date_add, Date_sub & Date_modify Function/////////////////////////////////////////
	
	echo "<h2>Date_add, Date_sub & Date_modify Function</h2>";
		//////////////////////////
		echo "<h4>date_add(object,interval)</h4>";
			$date3 = date_create("2020-05-21");
			date_add($date3,date_interval_create_from_date_string("10 Days"));
			echo date_format($date3, "d-m-Y") . "<br>";
		///////////////////////////	
		echo "<h4>date_sub(object,interval)</h4>";
			$date4 = date_create("2020-05-21");
			date_sub($date4,date_interval_create_from_date_string("10 Days"));
			echo date_format($date4, "d-m-Y") . "<br>";
		/////////////////////////////	
		echo "<h4>date_modify(object,modify)</h4>";
			$date5 = date_create("2020-05-21");
			date_modify($date5,"10 Days");//there add value in pluse minus in string this function will add or modify nicely
			echo date_format($date5, "d-m-Y") . "<br>";
	/////////////////////////////////////////END//////////////////////////////////////////////////////
?>