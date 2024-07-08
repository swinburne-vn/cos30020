<?php
    // connect db
    include('connect-db.php');

    // db info
    echo "<br>";
    echo mysqli_get_client_info($conn);
    echo "<br>";
    echo mysqli_get_host_info($conn);
    echo "<br>";
    echo mysqli_get_server_info($conn);