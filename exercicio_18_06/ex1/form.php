<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $operacao = $_GET['operacao'];
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    switch ($operacao) {
        case "somar":
            echo "<h3>O resultado após $operacao é <span style='color: green'>" . number_format(($num1 + $num2), 2, ',', '.') . "</span></h3>";
            break;
        case "subtrair":
            echo "<h3>O resultado após $operacao é <span style='color: green'>" . number_format(($num1 - $num2), 2, ',', '.') . "</span></h3>";
            break;
        case "dividir":
            echo "<h3>O resultado após $operacao é <span style='color: green'>" . number_format(($num1 / $num2), 2, ',', '.') . "</span></h3>";
            break;
        case "multiplicar":
            echo "<h3>O resultado após $operacao é <span style='color: green'>" . number_format(($num1 * $num2), 2, ',', '.') . "</span></h3>";
            break;
    }
    ?>
</body>

</html>