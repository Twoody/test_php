<?php
	require('./../utils/html.php');
	require('./../utils/dates.php');

	$myString = makeP("Hello(phpLovers)world ,");
	$myString .= makeP(tab()."This test is going to involve objects.");
	$myString .= makeP(tab()."This test also will utilize the date() builtin.");
	
	$myString .= makeP(tab().tab()."Today is " . date("Y/m/d"));
	$myString .= makeP(tab().tab()."Today is " . date("Y.m.d"));
	$myString .= makeP(tab().tab()."Today is " . date("Y-m-d"));
	$myString .= makeP(tab().tab()."Today is " . date("Ymd"));
	$myString .= makeP(tab().tab()."Today is " . date("l"));

	class Dog{
		public $breed  = "";
		public $name   = "";
		public $weight = "";
		public $issick = false;
		public $DOB    = 99999999; //YYYYMMDD
		public $age    = '';
		public function getAge(){
			$today = date('Ymd');
			$age   = $today - $this->DOB;
			return $age;
		}//end getAge()
		public function setAge(){
			$this->age = $this->getAge();
			return $this->age;
		}//end setAge()
	}//end class Dog

	$bro = new Dog;
	$bro->breed = "Aussie";
	$bro->name  = "Bro'Dee";
	$bro->DOB   = 20160317;

	$example = "My dog, ". $bro->name . " is " . dateToText($bro->getAge()) . ". ";
	$example .= $bro->name . " is an " . $bro->breed . " :)";
	$myString .= makeP($example);

	echo $myString;
?>
