<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <em>Hi <?php echo $_SESSION['name']; ?>!</em>   
    <h1>Dating App</h1>
    
    <form action="matching.php" method="GET">
        <label class="form-label" for="hobbies">Your hobbies?</label>
        <input class="form-control" type="text" id="hobbies" name="hobbies">
        <input type="hidden" name="yob" value="<?php echo $_GET['yob']; ?>">
        <button class="btn btn-primary" type="submit">Next</button>
    </form>
</body>
</html>