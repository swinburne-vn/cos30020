<?php 
    // setcookie('name', $_GET['name']);
    session_start();

    $_SESSION['name'] = $_GET['name'];
?>
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

    <p>Next page requires you enter your yob, hobbies. All are public. </p>
    <a href="yob.php?name=<?php echo $_GET['name']; ?>">OK, next &rarr;</a>
</body>
</html>