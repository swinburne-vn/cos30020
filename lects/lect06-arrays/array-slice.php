<?php

$topGolfers = [
    "Tiger Woods", 
    "Vijay Singh", 
    "Ernie Els", 
    "Phil Mickelson", 
    "Retief Goosen", 
    "Padraig Harrington", 
    "David Toms", 
    "Sergio Garcia", 
    "Adam Scott", 
    "Stewart Cink"
];

$topFiveGolfers = array_slice($topGolfers, 0, 5);
echo "<p>The top five golfers in the world are:</p><p>";

// for ($i = 0; $i < count($topFiveGolfers); $i++) {
//     echo "{$topFiveGolfers[$i]}<br />";
// }

foreach($topFiveGolfers as $golfer) {
    echo "$golfer<br />";
}

echo "</p>";