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

    <p>Matching...</p>

    <h2>Your info: </h2>
    <ul>
        <li>Your year of birth: <?php echo  $_GET['yob']; ?></li>
        <li>Your hobbies: <?php echo  $_GET['hobbies']; ?></li>
    </ul>
</body>
</html>