<?php
	require('./../utils/html.php');

	$myString = makeP("Helloworld,");
	$myString .= makeP(tab()."This test is going to involve booleans and conditionals");

	$a = 55;
	$b = "A string";
	if ($a > $b){
		$myString .= makeP("Integers are more than strings.");
	}
	else{
		$myString .= makeP("Integers are more than strings.");
	}
	$myString .= makeP((string)($a>$b));
	$myString .= makeP((string)($a===$b));

	if ($a > $b && false){
		$myString .= makeP("This should never happen...");
	}
	else
		$myString .= makeP("False makes everything false");

	if ($a > $b && false==false)
		$myString .= makeP("Unless false == false");
	else
		$myString .= makeP("This should never happen...");

	if (true == "foo")
		$myString .= makeP("true == 'foo'");
	if(true === "foo")
		$myString .= makeP("true === 'foo'");
	if(true != "foo")
		$myString .= makeP("true != 'foo'");
	if(true !== "foo")
		$myString .= makeP("true !== 'foo'");
	
	if (true || false)
		$myString .= makeP("true || false");
		
	if ("foo" || false)
		$myString .= makeP("'foo' || false");
	
	$myString .= (true == true ? $myString.="Even ternary!?" : $myString.="Or not?");

	echo $myString;
?>
