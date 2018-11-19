<?php
	$myString = "<p>Helloworld\n</p>";
	$myString .= "<p>I am a concatenated string.</p>";
	$myString .= "<p>I am being `echo`ed to console, and maybe read on a browser.</p>";
	echo $myString;

	function makeP($s){
		//s is type string
		//Will ensure s is properly wrapped in p tags
		return '<p>'.$s.'</p>';
	}

	$myString = "Hi again. ";
	$myString .= "I wanted to show you a cool new trick I learned about wrapping myself in a function.";
	$myString = makeP($myString);
	$myString .= makeP('This way, I will always be properly closed :D');
	echo $myString;
?>
