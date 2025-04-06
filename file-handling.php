<?php
$fileName = "niit-students.txt";
$directory = "niit-folder";
$date_dir = strtolower(date("F-Y"));
if(!file_exists($directory)){
    mkdir($directory, 0777, true);
}
$complete_directory = $directory."/".$date_dir;
if(!file_exists($complete_directory)){
    mkdir($complete_directory, 0777, true);
}
$filePath = $complete_directory."/".$fileName;
$myfile = fopen($filePath, "a") or die("Unable to open file!");
$txt = "Sammy Jackson\n";
fwrite($myfile, $txt);
$txt = "Mercy James\n";
fwrite($myfile, $txt);
fclose($myfile);


// $myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// // echo fread($myfile,filesize("newfile.txt"));
// while(!feof($myfile)){
//     echo fgets($myfile) . "<br>";
// }
// fclose($myfile);

?>