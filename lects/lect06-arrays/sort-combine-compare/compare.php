<?php

$a1 = [1,2,3]; 
$a2 = [2,3,4]; 

$diff = array_diff($a1, $a2);
print_r($diff);

echo '<hr/>';

$intersect = array_intersect($a1, $a2);
print_r($intersect);