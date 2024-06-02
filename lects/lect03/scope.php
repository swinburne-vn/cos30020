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
        function sayHello() {
            // use global variable $name
            // global $name;
            // global $_GET;

            $name = $_GET['name'];
            
            $name = strtoupper($name); // local variable

            echo "<h1>Hello $name!</h1>";
        }

        $name = 'Dennis'; // global variable
        
        // invoke function
        sayHello();
        
        echo "<h1>Hello $name!</h1>";

    ?>

</body>
</html>