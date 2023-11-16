<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEER COOKIE</title>
</head>
<body>
    <?php
    echo $_COOKIE("micookie","LOS DATOS DE LA COOKIE", time() - 1);
    ?>
</body>
</html>