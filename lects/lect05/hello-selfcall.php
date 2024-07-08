<?php 
    // -- initial data
    $name = '';
    $yob = '';
    $errors = [];

    if ($_POST) {
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
            $errors['name'] = "Please enter name!";
        }

        if (!preg_match("/\d{4}/", $yob)) {
            $errors['yob'] = "Invalid yob!";
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
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="container">
    <h1>Hello</h1>

    <form action="" method="post">
        <div class="form-group">
            <label class="form-label" for="">Your name?</label>
            <input class="form-control" name="name" value="<?php echo $name; ?>" type="text" placeholder="Your name?">

            <?php if (isset($errors['name'])): ?>
                <p class="text-danger"><?php echo $errors['name']; ?></p>
            <?php endif; ?>

        </div>
        <div class="form-group">
            <label class="form-label" for="">Your yob?</label>
            <input class="form-control" name="yob" value="<?php echo $yob; ?>"  type="text" placeholder="Your yob?">

            <?php if (isset($errors['yob'])): ?>
                <p class="text-danger"><?php echo $errors['yob']; ?></p>
            <?php endif; ?>

        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

    <?php if ($_POST && empty($errors)): ?>
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
    <?php endif; ?>
</body>
</html>