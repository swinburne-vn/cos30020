<?php

$dir = '../lect03';

$file = 'new.txt';
if (isset($_GET['file'])) {
    $file = $_GET['file'];
}

$path = "$dir/$file";

// handle user action
if ($_POST) {
    $newContent = $_POST['content'];

    file_put_contents($path, $newContent);
}

$content = file_get_contents($path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editor</h1>
    <p>File: <?php echo $path; ?></p>

    <form action="" method="POST">
        <textarea name="content" id="" cols="100" rows="10"><?php echo $content; ?></textarea>

        <button type="submit">Save</button>
    </form>
</body>
</html>