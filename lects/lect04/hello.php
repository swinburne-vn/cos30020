<?php 
    // -- initial data
    $name = '';
    $yob = '';
    $errors = [];

    // -- get data
    if (isset($_POST['name'])) {
        $name = $_POST['name']; 
    }

    if (isset($_POST['yob'])) {
        $yob = $_POST['yob']; 
    }

    // -- clean data
    $name = trim($name);
    $name = htmlspecialchars($name);

    // -- validate data
    if (empty($name)) {
        $errors[] = "Please enter name!";
    }

    if (!preg_match("/\d{4}/", $yob)) {
        $errors[] = "Invalid yob!";
    }

    // -- process data if no errors
    if (empty($errors)) {
        // 

    }

    $names = ['Dennis Nguyen', 'Doris', 'Linda', 'Jimmy'];
    $isExisted = false;

    foreach($names as $n) {
        if ($name == $n) {
        // if (strcasecmp($name, $n) == 0) {
            $isExisted = true;
            break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </ul>

    <!-- <h1>Hello <?php echo $name; ?>!</h1> -->

    <!-- <?php echo '<h1 class="title">Hello '.$name.'!</h1>'; ?> -->
    <?php echo "<h1 class=\"title\">Hello $name!</h1>"; ?>

    <?php if ($isExisted == true): ?>
        <p>Name already exist!</p>
    <?php else: ?>
        <p>Is this you?</p>
        <ul>
            <?php 
                foreach ($names as $n) {
                    // if (similar_text($name, $n) > 3) {
                    if (levenshtein($name, $n) < 3) {
                        echo "<li>$n</li>"; 
                    }
                }
            ?>
        </ul>
    <?php endif; ?>

</body>
</html>