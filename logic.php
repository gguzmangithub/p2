<?php
/*
Create an array for the password generator xkcs styke
*/
$passwords = Array(
	1  => 'father', 
    2  => 'car', 
	3  => 'horse', 
	4  => 'table',
	5  => 'sofa',
	6  => 'ball',
	7  => 'mother',
	8  => 'chair',
	9  => 'dog',
	10 => 'cat',
	11 => 'window',
	12 => 'horse',
	13 => 'pig',
	14 => 'farm',
	15 => 'bird',
	16 => 'truck',
	17 => 'cow',
	18 => 'hay',
	19 => 'chicken',
	20 => 'barn'
);
/* Create an array of symbols to be added into the password generator */
$symbols = Array(
    1 => '@',
	2 => '#',
	3 => '$',
	4 => '?'
);

/* 
Code below checks fo the user input and evaluates what message/output should be presented to the user
by assigning a determined value to a variable. index.php will read check this variables and display the appropriate 
message to the user.  
*/
if(isset($_POST["pwdwithnum"]) and isset($_POST["pwdnumwords"]) and $_POST["pwdnumwords"]<6 and $_POST["pwdnumwords"]>0) {
$addnumtopwd = rand(0,9);
} else {$addnumtopwd = "";}
if(isset($_POST["pwdwithsc"]) and isset($_POST["pwdnumwords"]) and $_POST["pwdnumwords"]<6 and $_POST["pwdnumwords"]>0) {
$addsptopwd = rand(1,4);
$addsptopwd = $symbols[$addsptopwd];
} else {$addsptopwd = "";}
if(isset($_POST["pwdnumwords"])) {
$evaluserentry=$_POST["pwdnumwords"];
 if($evaluserentry > 1 and $evaluserentry < 6) { 
 $test = $evaluserentry;
 $result=2;  
} elseif($evaluserentry == 1 ) { 
		 $test = rand(1,20);
		 $result = 1; 
 } else { 
		 $test = 5;
		 $result = 3; 
	}
  } else {
   $result = 3;
   }

