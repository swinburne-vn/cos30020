<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <?php

        $languages = [
            'vi_VN' => 'Vietnamese',
            'en_US' => 'English (US)',
            'en_UK' => 'English (UK)',
        ];

        // echo '<select>';
        // foreach ($languages as $code => $language) {
        //     echo "<option value='$code'>$language</option>";
        // }
        // echo '</select>';

    ?>

    <select>
        <?php foreach ($languages as $code => $language): ?>
            <option value="<?php echo $code; ?>"><?php echo $language; ?></option>
        <?php endforeach; ?>
    </select>

    <p></p>

    <?php
        $i = 1;
        while ($i <= 10) {
            echo "<img src='number-blocks/$i.webp'>";
            $i++;
        }

        for ($i = 10; $i >= 1; $i--) {
            echo "<img src='number-blocks/$i.webp'>";
        }
    ?>

</body>
</html>