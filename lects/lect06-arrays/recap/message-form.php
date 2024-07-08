<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        textarea {
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Post new message</h1>
    
    <hr/>
    <form action="message-save.php" method="post">
        <label>Topic</label>
        <input type="text" name="topic" />

        <label>Name</label>
        <input type="text" name="name" />

        <br /><br />
        <label>Message</label>
        <textarea name="message"></textarea>

        <br /><br />
        <input type="submit" value="Post message" />
        <input type="reset" value="Reset form" />
    </form>
    <hr/>

    <a href="message-show.php">View Discussion</a>
</body>
</html>