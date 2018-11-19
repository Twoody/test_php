<?php
	require('./../utils/html.php');

	$myString = makeP("Helloworld (4th time? really?),");
	$myString .= makeP(tab()."This test is going to involve integers and math");
	echo $myString;
?>
