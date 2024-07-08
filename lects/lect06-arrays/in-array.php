<?php
$hospitalDepts = [
    "Anesthesia", 
    "Molecular Biology", 
    // "Neurology", 
    "Pediatrics" 
]; 

if (in_array("Neurology", $hospitalDepts)) {
    echo "<p>The hospital has a Neurology department.</p>";
}