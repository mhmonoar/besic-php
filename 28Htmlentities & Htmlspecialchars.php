<?php
	echo "<h2>Htmlentities & Htmlspecialchars</h2>";
	echo "<br>";
	echo "<br>";
	/////////////////
	
	
	echo "<h4>Htmlentities function---htmlentities(string, flags)</h4>";
	
		
	/*
		*Htmlentities use for proctection from hacker sql injection
		*This function will Encodes special characters
		*flags means::
			**ENT_COMPACT --This is Default, Encodes only Double Quotes
			**ENT_QUOTES -- This will Encodes double and single quotes
			**ENT_NOQUOTES --This will not Encode any Quotes
	*/
	$str = "<a href = 'https://google.com'>Google Home page</a>";
		echo "Normal Printing<br>";
			echo $str . "<br><br>" ;
		echo "After Encode check also view source <br>";
			$htmlencode = htmlentities($str)."<br><br>"; // check on view sourse ctrl + u then you will see the convert things
						//you can used here 2nd paramitter plug funcstins
			echo $htmlencode;
			echo "<br>";
			echo "<br>";
	/////////Decode///////
	echo "<h4>Html entity Decode function---html_entity_decode(string, flags)</h4>";
	echo "After Decode check also view source";
		echo "After Decode check also view sourse <br>";
		echo html_entity_decode($htmlencode). "<br><br>"; // check on output and view sourch
	
	echo "<h4>Html SpecialChars  function---htmlspecialchars(string, flags)</h4>";
	/*
	//special character Encode special list:: and = &-&amp; , doublquote = "-&quot; , singlequote = '-&#039, lessthen = < -&it; ,grater then = > -&gt; 
	// get_html_translation_table(function, flags)
							//there function have two function 
								//**HTML_ENTITIES
								//**HTML_SPECIALCHARS-- It's will show special character array list
								*flags means::
			**ENT_COMPACT --This is Default, Encodes only Double Quotes
			**ENT_QUOTES -- This will Encodes double and single quotes
			**ENT_NOQUOTES --This will not Encode any Quotes
			
	*/
	$strr = "<a href = 'https://google.com'>Google Home page</a>";
		echo "Normal Printing<br>";
			echo $strr."<br>";
		echo "After Usinging Htmlspecalchars check also view source <br>";
			$specialcharEn= Htmlspecialchars($strr);
			echo $specialcharEn;
	echo "<h4>Html SpecialChars Decode function---htmlspecialchars_decoe(string, flags)</h4>";
		echo "After Decode check also view source";
		echo "After Special Character Decode check also view sourse <br>";
			echo html_entity_decode($specialcharEn). "<br><br>"; 
	
?>