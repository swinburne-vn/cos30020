<?php 
    // connect db
    include('../shared/connect-db.php');

    // create car
    $make = 'Holden';
    $model = 'Astra';
    $price = 20000;
    $yom = 2020;
    
    $sql = "INSERT INTO `cars` (`id`, `make`, `model`, `price`, `yom`) 
        VALUES (NULL, '$make', '$model', '$price', '$yom');";
    $result = @mysqli_query($conn, $sql);

    if ($result) {
        echo 'Inserted successfully!';
    } else {
        echo 'Failed to insert';
    }

    // close connection
    @mysqli_close($conn);