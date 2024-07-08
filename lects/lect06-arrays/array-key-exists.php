<?php

$gamePieces["Dancer"] = "Daryl";
// $gamePieces["Fat Man"] = "Dennis";
$gamePieces["Assassin"] = "Jennifer";

if (array_key_exists("Fat Man", $gamePieces)) {
    echo "<p>{$gamePieces['Fat Man']} is already 'Fat Man'.</p>";
} else {
    $gamePieces["Fat Man"] = "Don";
    echo "<p>{$gamePieces['Fat Man']} is now 'Fat Man'.</p>";
}