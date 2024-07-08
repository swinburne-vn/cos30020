<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Save message</h1>

    <?php
    if (isset($_POST['topic'])) {
        
        $topic = $_POST["topic"];
        $name = $_POST["name"];
        $message = $_POST["message"];
        $postMessage = $topic . "~" . $name . "~" . $message . "\n";
        
        $messageStore = fopen("messages.txt", "a");
        fwrite($messageStore, "$postMessage");
        fclose($messageStore);

        echo "<p><strong>Topic</strong>: $topic<br />";
        echo "<strong>Name</strong>: $name<br />";
        echo "<strong>Message</strong>: $message</p>";
    }
    ?>

    <a href="message-show.php">View Discussion</a>
</body>
</html>