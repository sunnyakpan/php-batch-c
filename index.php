<?php
// //  print"Hello World";


// //  localhost\niit\batch-c\index.php

// // data type
// // 1. integer
// // 2. float
// // 3. string
// // 4. boolean
// // 5. array
// // 6. object
// // 7. null
// // 8. resource

// $name = null;
// $age = 25;
// $height = 5.5;
// $isActive = true;
// $colors = array("red", "green", "blue");
// $person = array("name" => "John", "age" => 25, "height");


// // echo gettype($person);
// //  echo 'My Name is $name';

// // variables
// // 1. $
// $name = "sam";
// $name = "Sampson";
// // echo $name;
// // Rules of Declaring Variables in PHP
// // 1. Variable name must start with a letter or underscore
// // $_2percent = 2;
// // $2percent 
// // 2. Variable name must not start with a number
// // 3. Variable name must not contain any special characters except underscor
// // 4. Variable name must not be a reserved keyword in PHP
// // 5. A variable must not contain space
// $my_name; // snake case
// $myName; // camel case
// $MyName; // Pascal case
// // 6. variable names are case sensitive
// // 7. All variable names must begin with $ (dollar sign) except constant variable

// // How to declare constant in PHP
// // 1. Using define() function
// define("PI", 3.142);
// define("APPNAME","NIIT Student");
// // 2. Using const keyword
// // const PIE = 3.142;


// // Comments in php
// // use of double slash // for single line comment
// // use /* */ for multi-line comment
// /* 
// hhds
// mmmd
// mmdm
// */

// // PHP Strings
// $topic = "php strings in details";
// // 1. change of string case
// $topic_sm = strtolower($topic); // changing to lower case
// echo $topic_sm."<br/>";

// $topic_lg = strtoupper($topic); // changing to upper case
// echo $topic_lg."<br/>";

// $topic_cp = ucwords($topic); // changing all first letter of every word to upper case
// echo $topic_cp."<br/>";

// $topic_fw = ucfirst($topic); // changing all first letter of a string to upper case
// echo $topic_fw."<br/>";

// // 2. string length
// $lenght_of_topic = strlen($topic);
// echo $lenght_of_topic ."<br/>";

// // 2. string words count
// $count_words_in_topic = str_word_count($topic);
// echo $count_words_in_topic ."<br/>";

// // 2. searching for value inside string 
// $value = "details";
// $isValueAvailable = strpos($topic,$value);
// echo $isValueAvailable?" $value is Available":"$value is Not Available";


// // functions in php

// function AreaOfCircle(){
//     $radius = 5;
//     $pie  = 3.142;
//     $area = $pie * ($radius * $radius);
//     echo "<br/>The Area is: ". $area;
// }
// AreaOfCircle();
// AreaOfCircle();

// function AreaOfRectangle($length, $breadth){
//     $area = $length * $breadth;
//     echo "<br/>The Area of the Rectangle is: ". $area;
// }
// AreaOfRectangle(20,30);
// AreaOfRectangle(12,14);

// function calculateBonus($salary, $percentage =12){
//     $bonus = ($salary * $percentage)/100;
//     return $bonus;
// }
// $johnSalary = 7000;
// $johnTakeHome = calculateBonus($johnSalary) + $johnSalary;
// echo "<br/> His take home Salary is: ". $johnTakeHome;

// $johnSalary = 7000;
// $johnTakeHome = calculateBonus($johnSalary,25) + $johnSalary;
// echo "<br/> His take home Salary is: ". $johnTakeHome;

// $samSalary = 5000;
// $samTakeHome = calculateBonus($samSalary) + $samSalary;
// echo "<br/> His take home Salary is: ". $samTakeHome;


// // arrays in php
// // types of array in php
// // 1. indexed or numeric array
// $colors = array("red","green","blue","yellow");
// echo "<br/>". $colors[3];
// // 2. Associative Array 
// $person = array(
//     "name" => "John",
//     "age" => 25,
//     "city" =>"London"
// );
// echo "<br/>". $person["name"];
// // 3. Multidimensional Array
// // Indexed Multidimensional Array
// $persons = array(
//     array("name" => "Johnson", "age" => 45, "city" =>
//     "Nigeria"),
//     array("name" => "Sam", "age" => 30, "city" =>
//     "Paris"),
//     array("name" => "John", "age" => 25, "city" =>
//     "London")
// );
// echo "<br/>". $persons[2]["city"];

// // Associative multidimensional Array
// $favourites = array(
//     "colors" => array("Purple", "Blue","Tufiakwa red"),
//     "fruits" => array("Apple", "Banana"),
//     "cars" => array("Toyota", "Honda")
// );
// echo "<br/>". $favourites["colors"][0];


// // let's look at how to create an array with square bracket []
// $person2 = ["name" => "James", "age" => 55, "city"=> "America"];
// echo "<br/> Person2 city is: ". $person2["city"];

// // how to update array items
// $numbers = [1,2,4,5,7.5,8]; //indexed array
// $numbers[2] = 44;
// echo "<br/>". $numbers[2];

// $cars = [
//     'name'=>"Toyota",
//     'model'=>1998,
//     'color'=>"red"
// ]; // associative array
// $cars['color'] = "Purple";
// echo "<br/>". $cars['color'] ."<br/>"; // output: Purple

// // how to display arrays in php
// // 1. print_r() function
//     print_r($numbers);
//     echo "<br/>";
// // 2. var_dump() function
//     var_dump($numbers);

//     // operators in php
//     // 1. Arithmetic Operators: 
//     // 2. Assignment Operators:
//     // 3. Comparison Operators:
//     // 4. Logical Operators:
//     // 5. String Operators:
//     // 6. Array Operators:

//     // 1. Arithmetic Operators:
//     // +, -, /, *, % ** pow(2,3)
//     $num1 = 10;
//     $num2 = 5;
//     echo "<br/>". ($num1 + $num2);
//     // 2. Assignment Operators
//     // =, +=, -=, *=, /=, %=, **=
//     $num1 = 10;
//     $num1 += 5; // $num1 = $num1 + 5
//     echo "<br/>". $num1;

//     // 3. Comparison Operators:
//     // ==, !=, ===, !==, <, >, <=, >=
//     $num1 = 10;
//     $num2 = 5;
//     echo "<br/>". $num1 == $num2; // false

//     // 4. Logical Operators:
//     // and/&&, or/||, xor, and_eq, or_eq, xor_eq, not
$num1 = 10;
$num2 = 5;
$num3 = 10;
// echo "<br/> Logical Returned: ". ($num1 > $num2) xor ($num1 == $num3);
// example of and_eq
$num1 = 10;
$num2 = 5;
$num1 &= $num2; // $num1 = $num1 & $num +=
$isActive = true;
// echo !$isActive;

// 5. String Operators:
// ., .=,
$name = "John";
$age = 25;
// echo "<br/>". $name . " is " . $age . " years old";

$hobbies = 'reading';
$hobbies .= ' coding';
$hobbies .= ' watching of movies';
// echo $hobbies;

// 6. Array Operators:
// +, ==, !=, ===, !==, <, >, <=, >=
$arr1 = [1, 2, 3];
$arr2 = [1, 2, 3];
// echo "<br/>". ($arr1 == $arr2);

// conditional statements in php
// if statement
$num1 = 14;
$num2 = 12;
$num3 = 30;
// if($num1 == $num2){
//     echo "num1 is equal to num2";
// }
// else statement
// if($num1 == $num2){
//     echo "num1 is equal to num2";
// }else{
//     echo "num1 is not equal to num2";
// }
// if-else-if statement
$score = 39.5;
// if ($score < 40) {
//     echo "Your Grade is: F";
// } elseif ($score < 45) {
//     echo "Your Grade is: E";
// } elseif ($score < 50) {
//     echo "Your Grade is: D";
// } elseif ($score < 60) {
//     echo "Your Grade is: C";
// } elseif ($score < 70) {
//     echo "Your Grade is: B";
// } elseif ($score <= 100) {
//     echo "Your Grade is: A";
// } else {
//     echo "Invalid Score";
// }

// Switch Statement
$day = 5;
// switch ($day) {
//     case 1:
//         echo "Today is Monday";
//         break;
//     case 2:
//         echo "Today is Tuesday";
//         break;
//     case 3:
//         echo "Today is Wednesday";
//         break;
//     case 4:
//         echo "Today is Thursday";
//         break;
//     case 5:
//         echo "Today is Friday";
//         break;
//     case 6:
//         echo "Today is Saturday";
//         break;
//     case 7:
//         echo "Today is Sunday";
//         break;
//     default:
//         echo "Invalid Day";
// }

// Tenary Operator
$isLoggedIn = false;
$greeting = $isLoggedIn ? "Welcome" : "Please Login";
// echo $greeting; // Outputs: Welcome


// loops or iterations in php
// For Loop
//  for ($i = 0; $i < 10; $i++) {
//     echo $i . "<br>";
//  }
 // While Loop
 $i = 1;
//  while ($i < 10) {
//     echo $i . "<br>";
//     $i++;
//  }
 // Do While Loop
 $i = 1;
//  do {
//     echo $i . "<br>";
//     $i++;
//  }while($i<10);
 
 // Foreach Loop
//  $fruits = array("apple", "banana", "cherry");
//   foreach ($fruits as $fruit) {
//     echo $fruit . "<br>";
//   }
// loop through associative array
$person = array("name" => "John", "age" => 30, "city
" => "New York");
// foreach ($person as $key => $value) {
//     echo $key . ": " . $value . "<br>";
// }

// Array Functions
// 1.array_push() - adds one or more elements to the end of an array
$fruits = [
    "Orange",
    "Mango",
    "Pineapple"
];
// var_dump($fruits);

// // let's add Apple
// array_push($fruits,"Apple","Cherry");
// echo "<br>";
// var_dump($fruits);

// 2. array_pop() - removes the last item from an array

// array_pop($fruits);
// echo "<br>";
// var_dump($fruits);

// no 3 
// array_shift() - removes the first item from an array
// array_shift($fruits);
// echo "<br>";
// var_dump($fruits);

// no 4
// array_unshift() - adds one or more elements to the beginning of an array
// array_unshift($fruits,"Apple","Cherry");
// echo "<br>";
// var_dump($fruits);
// no 5
// array_merge() - merges the elements of one or more arrays together
$fruits2 = ["Apple","Cherry"];
$fruits = array_merge($fruits, $fruits2);
echo "<br>";
// var_dump($fruits);
// no 6.
// array_combine(): Creates an array by using one array for keys and another for values.
$keys = [
    "Name",
    "Age",
    "City"
];
$person = [
    "John",
    25,
    "Lagos"
];
// $person1= array_combine($keys, $person);
// echo "<br>";
// var_dump($person1);

// 7. in_array(): Checks if a value exists in an array.
// $fruits = ["Apple","Banana","Cherry"];
// echo "<br>";
// echo in_array("Grape", $fruits) ? "Yes" : "No";

// 8. array_key_exists(): Checks if a key exists in an array.
$fruits = [
    "Apple" => 10,
    "Banana" => 22,
    "Cherry" => 34
];
// echo "<br>";
// echo array_key_exists(10, $fruits) ? "Yes" : "No";

// 9. array_keys(): Returns all the keys of an array.
$fruits = [
    "Apple" => 10,
    "Banana" => 22,
    "Cherry" => 34
];
// echo "<br>";
//  $fruitKeys = array_keys($fruits);
//  print_r($fruitKeys);

// 10. array_values(): Returns all the values of an array.

$fruits = [
    "Apple" => 10,
    "Banana" => 22,
    "Cherry" => 34
];
// echo "<br>";
 $fruitValues = array_values($fruits);
//  print_r($fruitValues);

//  11. array_filter(): Filters elements of an array using a callback function.
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
echo "<br>";
$oddNumbers = array_filter($numbers, function($number) {
    return $number % 2 != 0;
});
// print_r($oddNumbers);

// 12. array_map(): Applies a callback function to each element of an array.
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
echo "<br>";
$doubleNumbers = array_map(function($number) {
    return $number * 2;
}, $numbers);
// print_r($doubleNumbers);

// 13. array_reduce(): Reduces an array to a single value using a callback function.
$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
echo "<br>";
$sumOfNumbers = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
});


// Super global variables
// 1. $_SERVER[] 
// 2. $_POST[]
// 2. $_GET[]
// 4. $_REQUEST[]
// 5. $_SESSION[] 
// 6. $_FILES[]
// 7. $_COOKIE[]

// interpolation
// when double qoute("") interprets sensitive information as sensitive information

// $name = "Sam";
// $age = 25;
// echo '<br>My Name is $name and I am $age years old';

