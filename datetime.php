<?php

// year formats
// Y represents Year in 4 digits, e.g 2025
$date = date("Y");
// y represents Year in 2 digits, e.g 25
$date = date("y");

// months formats
// m represents number(with preceeding zero) of a month in a year
$date = date("m");
// M represents abbreviated month name, e.g Feb
$date = date("M");
// F represents Full month name, e.g February
$date = date("F");

// weeks formats
// w represents number of a week (0 = Sunday, 1 = Monday, ..., 6
// = Saturday)
$date = date("w");
// W represents number of a week in a year
$date = date("W");
// D represents abbreviated weekday name, e.g Mon
$date = date("D");
// l represents Full weekday name, e.g Monday
$date = date("l");

// days formats
// d represents number of days in a month
$date = date("d");
// j represents number of days in a month with leading zeros
$date = date("j");

// Hours Formats
// H represents 24-hour format of an hour with leading zeros
$date = date("H");
// h represents 12-hour format of an hour with leading zeros
$date = date("h");

// Minutes formats
// i represents minutes with leading zeros
$date = date("i");
// s represents seconds with leading zeros
$date = date("s");

// a represents small letters of am/pm
$date = date("a");

// A represents capital letters of AM/PM
$date = date("A");

$today = date("d-m-Y, h:i:sa");
// $today = date("dS M, Y h:i:sa");





echo $today;
echo "<br>";

// date_default_timezone_set("America/New_York");
// echo "The time is " . date("h:i:sa");
echo date_default_timezone_get();

echo "<br>";
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

echo "<br>";
$d=strtotime("tomorrow");
echo "tomorrow is ". date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo "next Saturday is". date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo "Next 3 Months ". date("Y-m-d h:i:sa", $d) . "<br>";
?>

