<?php 
    // connect db
    include('../shared/connect-db.php');

    // create car
    $make = 'update';
    $model = 'update';
    $price = 2000;
    $yom = 2022;
    $id = 2;
    
    $sql = "UPDATE `cars` 
        SET `make` = '$make', `model` = '$model', `price` = '$price', `yom` = '$yom' 
        WHERE `cars`.`id` = $id;";
    $result = @mysqli_query($conn, $sql);

    if ($result) {
        echo 'Updated successfully!';
    } else {
        echo 'Failed to update';
    }

    // close connection
    @mysqli_close($conn);