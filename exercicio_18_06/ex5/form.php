<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $largura = floatval($_GET['largura']);
    $comprimento = floatval($_GET['comprimento']);
    echo "<h3>A área do terreno é <span style='color: green'>" . number_format((floatval($largura) * floatval($comprimento)), 2, ",", ".") . "</span>m<sup>2</sup></h3>";
    ?>
</body>

</html>