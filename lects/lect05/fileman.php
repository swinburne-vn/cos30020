<?php 
    // echo getcwd();

    // echo "<hr>";

    $dir = '../lect03'; // relative path

    // -- handle user actions
    if ($_POST) {
        $entry = $_POST['entry'];
        $path = "$dir/$entry";

        $action = $_POST['action'];

        if ($action == 'copy') {
            $newPath = "$dir/copy-$entry";
            copy($path, $newPath);
        } else if ($action == 'rename') {
            $newName = $_POST['newName'];
            $newPath = "$dir/$newName";

            rename($path, $newPath);
        } else if ($action == 'delete') {
            if (is_file($path)) {
                unlink($path);
            } else {
                rmdir($path);
            }
        }
    }

    // // open dir
    // $dirHandle = opendir($dir);

    // // iterate files 
    // while ($entry = readdir($dirHandle)) {
    //     echo "$entry <br>";
    // }

    // // close dir
    // closedir($dirHandle);
    
    $entries = scandir($dir);

    // foreach ($entries as $entry) {
    //     echo "$entry <br>"; 
    // }
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
    
    <h1>File manager</h1>
    <p>Current working directory: <?php echo getcwd(); ?></p>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>entry</th>
            <th>is file</th>
            <th>is dir</th>
            <th>is readable</th>
            <th>is writable</th>
            <th>is executable</th>
            <th>last accessed</th>
            <th>last modified</th>
            <th>owner</th>
            <th>type</th>
            <th>size</th>
            <th>Actions</th>
        </tr>

        <?php 
            foreach ($entries as $entry): 
                $path = "$dir/$entry";
        ?>
            <tr>
                <td><?php echo $entry; ?></td>
                <td><?php echo is_file($path); ?></td>
                <td><?php echo is_dir($path); ?></td>
                <td><?php echo is_readable($path); ?></td>
                <td><?php echo is_writable($path); ?></td>
                <td><?php echo is_executable($path); ?></td>
                <td><?php echo date('Y-m-d H:m:s', fileatime($path)); ?></td>
                <td><?php echo filectime($path); ?></td>
                <td><?php echo fileowner($path); ?></td>
                <td><?php echo filetype($path); ?></td>
                <td><?php echo filesize($path); ?></td>
                <td>

                    <form action="" method="post">
                        <a href="editor.php?file=<?php echo $entry; ?>">Edit</a>

                        <input type="hidden" name="entry" value="<?php echo $entry; ?>">
                        <button class="btn btn-primary" name="action" value="copy">Copy</button>

                        <input type="text" name="newName" value="<?php echo $entry; ?>">
                        <button class="btn btn-secondary" name="action" value="rename">Rename</button>
                        
                        <button class="btn btn-danger" name="action" value="delete">Delete</button>
                    </form>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>