<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // define function
        function sayHello($name) {
            echo "<h1>Hello $name!</h1>";
            // check attendance
            // record phone number
        }

        $name = $_GET['name']; 

        // invoke function
        sayHello($name);
        sayHello('Nghia');
        sayHello('Phuc');
        sayHello('Minh');
    ?>

</body>
</html>