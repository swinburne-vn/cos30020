<?php

$dir = "../lect03";
$file = 'test.txt';
$path = "$dir/$file";

// // open file
// $fileHandle = fopen($path, "r");

// // read line
// while (!feof($fileHandle)) {
//     $line = fgets($fileHandle);
//     echo "$line <br>";
// }

// // close file
// fclose($fileHandle);

// -- read entire file
$content = file_get_contents($path);
echo nl2br($content);

echo "<hr>";

$lines = file($path);
foreach ($lines as $line) {
    echo "$line <br>";
}

echo "<hr>";
readfile($path);