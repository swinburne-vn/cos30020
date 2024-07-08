<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 100%;
        }

        table, tr, td {
            border: #ccc solid 1px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Discussion</h1>

    <?php
        if (!file_exists("messages.txt") || filesize("messages.txt") == 0) {
            echo "<p>There are no messages posted.</p>";
        } else {
            echo "<table>";

            $messageArray = file("messages.txt");
            for ($i = 0; $i < count($messageArray); $i++) {
                $curMessage = explode("~", $messageArray[$i]);
                echo "<tr>";
                echo "<td><strong>" . ($i + 1) . "</strong>.</td>";
                echo "<td><strong>Topic</strong>: "
                . stripslashes($curMessage[0]) . "<br />";
                echo "<strong>Name</strong>: "
                . stripslashes($curMessage[1]) . "<br />";
                echo "<strong>Message</strong>: "
                . stripslashes($curMessage[2]);
                echo "</td></tr>";
            }

            echo "</table>";
        }
    ?>

    <a href="message-form.php">Post new message</a>
</body>
</html>