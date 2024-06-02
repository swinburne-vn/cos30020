<?php

$fruit = "banana";

switch($fruit) {
    case "orange":          
        echo "$10 please";
        break;
    case "banana":  // switch = ON
        echo "$5 please";
        break;      // switch = OFF
    case "apple":
    case "grape":
        echo "$7 please";
        break;
    default:
        echo "$0 to be hungry";
}