<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        /**
         * solve linear equation ax + b = 0 
         * input: a, b
         * output: root of equation as a string
         */
        function solveLinearEquation($a, $b) {
            // if a != 0
                // x = -b/a
                // return "1 root x=..."
            // else 
                // if b != 0
                    // return "no root"
                // else 
                    // return "many roots"
            return "roots";
        }

        $a = $_GET['a'];
        $b = $_GET['b'];
        $root = solveLinearEquation($a, $b);
        echo $root;
    ?>

</body>
</html>