<?php
    $capitals = [
        "Vietnam" => "Hanoi", // 
        "Australia" => "Canberra", // <--
        "Malaysia" => "Kuala Lumpur",
        "Thailand" => "Bangkok",
    ];

    // foreach ($capitals as $capital) {
    //     echo "The capital of ", key($capitals), " is $capital<br>";
    //     next($capitals);
    // }

    foreach ($capitals as $country => $capital) {
        echo "The capital of ", $country, " is $capital<br>";
    }

    $alphabets = ['a', 'b', 'c', 'd'];
    foreach($alphabets as $index => $value) {
        echo $index, "-", $value, "<br/>";
    }

    unset($capitals["Vietnam"]);