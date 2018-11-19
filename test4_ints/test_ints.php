<?php
	require('./../utils/html.php');

	$myString = makeP("Helloworld (4th time? really?),");
	$myString .= makeP("This test is going to involve integers and math");
	echo $myString;
	$myString = "";
	$a = 1;
	$b = 1;
	$c = $a+$b;
	
	$myString .= makeP("This test will do addition between two variable of type int. These two variables will then attempt to just concatenate to our current string.");
	$myString .= makeP(tab()."1+1 = ".$c);
	$myString .= makeP("Next, we will see what happens we add a str(int) to an int:");
	$a = "1";
	$c = $a + $b;
	$myString .= makeP(tab()."1+1 = ".$c);
	$myString .= makeP("Unexepected outcome, given we just added a string to an int above, and we kept our string...");
	$myString .= makeP("What if we do `\"a\"+1`?");
	$a = "1a";
	$c = $a + $b;
	$a = "a";
	$myString .= makeP(tab()."1a + 1 = ".$c);
	$myString .= makeP(tab()."a + 1 = 1".tab()."<-- THIS WILL GENERATE A WARNING");

	$a = 0;
	$b = 1;
	$c = $a-$b;
	$myString .= makeP(tab()."0 - 1 = ".$c);

	$a = 0;
	$b = 1;
	$c = $a*$b;
	$myString .= makeP(tab()."0 * 1 = ".$c);

	$a = 0;
	$b = 1;
	$c = $a/$b;
	$myString .= makeP(tab()."0 / 1 = ".$c);

	$a = 1;
	$b = 0;
	//$c = $a/$b;
	$c = INF;
	$myString .= makeP(tab()."1 / 0 = ".$c.tab()."<-- THIS WILL GENERATE A WARNING (Division by zero)");

	$a = INF;
	$b = 1;
	$c = $a+$b;
	$myString .= makeP(tab()."INF + 1 = ".$c);

	$a = INF;
	$b = NAN;
	$c = $a+$b;
	$myString .= makeP(tab()."INF + NAN = ".$c);

	$a = INF;
	$b = NAN;
	$c = $a*$b;
	$myString .= makeP(tab()."INF * NAN = ".$c);

	$a = INF;
	$b = NAN;
	$c = $a/$b;
	$myString .= makeP(tab()."INF / NAN = ".$c);

	$a = INF;
	$b = NAN;
	$c = $b/$a;
	$myString .= makeP(tab()."NAN / INF = ".$c);

	$a = 1;
	$b = true;
	$c = $a+$b;
	$myString .= makeP(tab()."1 + true = ".$c);

	$a = 1;
	$b = false;
	$c = $a*$b;
	$myString .= makeP(tab()."1 * false = ".$c);

	$a = 1;
	$b = false;
	$c = $a+$b;
	$myString .= makeP(tab()."1 + false = ".$c);

	$a = 0;
	$b = INF;
	$c = $a/$b;
	$myString .= makeP(tab()."0 - INF = ".$c);

	$a = INF;
	$b = INF;
	$c = $a-$b;
	$myString .= makeP(tab().(string)$a." - ".(string)$b." = ".$c);
	echo $myString;
?>
