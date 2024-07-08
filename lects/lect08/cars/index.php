<?php
    // connect db
    include('../shared/connect-db.php');

    // query all cars
    $sql = "SELECT * FROM `cars`";
    $result = @mysqli_query($conn, $sql);
    // $car = mysqli_fetch_assoc($result);
    
    $cars = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // print_r($cars[0]);
    
    mysqli_free_result($result);
    
    // close connection
    @mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All cars</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>Year of manufacturer</th>
        </tr>

        <?php foreach ($cars as $car): ?>
        <tr>
            <td><?php echo $car['id']; ?></td>
            <td><?php echo $car['make']; ?></td>
            <td><?php echo $car['model']; ?></td>
            <td><?php echo $car['price']; ?></td>
            <td><?php echo $car['yom']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>