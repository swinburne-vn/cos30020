<?php

$hospitalDepts = [
    "Anesthesia", // first element (0)
    "Molecular Biology", // second element (1)
    "Neurology", // third element (2)
    "Pediatrics" // fourth element (3)
]; 

array_splice($hospitalDepts, 3); //10, ["Ophthalmology", "test"]);
// add more than 1 element?
// delete element?

print_r($hospitalDepts);

// unset
unset($hospitalDepts[2]);
unset($hospitalDepts[3]);
