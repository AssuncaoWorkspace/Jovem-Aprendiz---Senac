<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <h1>Resultado da soma</h1>
    <?php

    $num = $_POST ["numero1"];
    $num2 = $_POST ["numero2"];
    $soma = $num + $num2;

    echo "<p>O resultado da soma dos dois números é: $soma</p>"

    ?>
</body>

</html>