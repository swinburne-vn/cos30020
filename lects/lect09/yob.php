<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <em>Hi <?php echo $_GET['name']; ?>!</em>   
    <h1>Dating App</h1>

    <form action="hobbies.php" method="GET">
        <label class="form-label" for="dob">Your date of birth?</label>
        <input class="form-control" type="text" id="dob" name="yob">

        <input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">

        <button class="btn btn-primary" type="submit">Next</button>
    </form>
</body>
</html>