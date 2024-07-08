<?php

$dir = '../lect03';

$file = 'test.txt';
$path = "$dir/$file";

// // open file
// $fileHandle = fopen($path, 'a'); // append

// // write file - alias fputs()
// fwrite($fileHandle, "line 1 \n"); // <- double quote
// fwrite($fileHandle, "line 2 \n");
// fwrite($fileHandle, "line 3 \n");

// // close file
// fclose($fileHandle);

// 
$content = "line 1 \n line 2 \n line 3 \n";
file_put_contents($path, $content, FILE_APPEND);