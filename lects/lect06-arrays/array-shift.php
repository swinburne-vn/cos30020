<?php

$topGolfers = [
    "Ernie Els",
    "Phil Mickelson",
    "Retief Goosen", // index = 2
    "Padraig Harrington",
    "David Toms",
    "Sergio Garcia",
    "Adam Scott",
    "Stewart Cink" 
];

$topGolfers[] = "Dennis";

array_shift($topGolfers);
print_r($topGolfers);

// echo "<hr/>";

// array_unshift($topGolfers, "Tiger Woods", "Vijay Singh");
// print_r($topGolfers);

// unset($topGolfers[2]);