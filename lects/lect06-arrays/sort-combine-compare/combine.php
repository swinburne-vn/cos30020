<?php

// indexed array
$provinces = [
    "Newfoundland and Labrador",
    "Prince Edward Island", 
    "Nova Scotia", 
    "New Brunswick", 
    "Quebec",
    "Ontario", 
    "Manitoba", 
    "Saskatchewan", 
    "Alberta", 
    "British Columbia"
];
$territories = array(
    "Nunavut", 
    "Northwest Territories",
    "Yukon Territory"
);
// $canada = $provinces + $territories; //territories ignored

$canada = array_merge($provinces, $territories);

print_r($canada);

// associative array
// $arr1 = array (
//     "one"=>"apple", 
//     "two"=>"banana"
// );

// $arr2 = array (
//     "one"=>"cherry", 
//     "four"=>"grapes"
// );

// $arr3 = $arr1 + $arr2;
// // print_r($arr3);