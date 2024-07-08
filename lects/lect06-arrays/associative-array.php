<?php

// init
$capitals = [
    "Vietnam" => "Hanoi", 
    "Australia" => "Canberra"
];
// add/ update
$capitals["Malaysia"] = "Kuala Lumpur";
// access
// echo $capitals["Vietnam"];

// what if
// $capitals[] = "Bangkok";

// print_r($capitals);
// foreach($capitals as $country => $capital) {
//     echo "$country - $capital <br>";
// }

// foreach($capitals as $capital) {
//     echo $capital;
// }


$keys = array_keys($capitals);
for ($i = 0; $i < count($capitals); $i++) {
    
    echo "$keys[$i] - {$capitals[$keys[$i]]} <br>";
}