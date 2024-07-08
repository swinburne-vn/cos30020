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

    <form action="hello.php" method="post">
        <div class="form-group">
            <label class="form-label" for="">Your name?</label>
            <input class="form-control" name="name" type="text" placeholder="Your name?">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Your yob?</label>
            <input class="form-control" name="yob" type="text" placeholder="Your yob?">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

</body>
</html>