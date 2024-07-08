<?php 
    // connect db
    include('../shared/connect-db.php');

    // delete car
    $id = 1;
    $sql = "DELETE FROM `cars` WHERE `cars`.`id` = $id";
    $result = @mysqli_query($conn, $sql);

    if ($result) {
        echo 'Deleted successfully!';
    } else {
        echo 'Failed to delete';
    }

    // close connection
    @mysqli_close($conn);