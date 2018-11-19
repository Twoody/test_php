<?php
	require('./../utils/html.php');
	require('./../utils/dates.php');
	$helloScript_path = "./../texts/hello.txt"; //WARNING: CONTAINS HTML IN .txt FILE
	$hellotext			= file_get_contents($helloScript_path, FILE_USE_INCLUDE_PATH);
	$myString 			= makeP($hellotext);

	

	echo $myString;
?>
