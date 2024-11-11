<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAN-23</title>
</head>
<body>
    <?php

        // The function used to setup current timezone, if it differs from the local
        date_default_timezone_set("Europe/Riga");
        // The date() function formats a local time date and time, and returns the formated date in string 
        echo date("l, F j, Y, G:i A");

    ?>
</body>
</html>

