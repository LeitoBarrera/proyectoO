<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEER COOKIE</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["micookie"])) {
        echo "<p>" . $_COOKIE["micookie"] . "</p>";
    } else {
        echo "<p>USTED NO HA CREADO NINGUNA COOKIE</p>";
    }
    ?>
</body>
</html>
