<?php
$str = "Visit W3Schools or niit for your tech related courses, but i will recommend niit";
$pattern = "/niit/i";
// echo preg_match($pattern, $str);
// echo "<br>";
// echo preg_match_all($pattern, $str);
// echo "<br>";
// echo preg_replace($pattern, "Wave", $str);

$numbers = '1223 hhh 478838 483 98';
// $pattern2 = "/[56]/";
// $pattern2 = "/[^56]/";
$pattern2 = "/[3-6]/";
echo preg_match_all($pattern2, $numbers);
?>