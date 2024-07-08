<?php
    include('../config/app.php');

    $conn = @mysqli_connect($host, $dbuser, $dbpassword, $dbname);

    if (!$conn) { 
        header('location: ../errors/500.php');
    } 