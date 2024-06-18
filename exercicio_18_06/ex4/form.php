<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $ano = intval($_GET['ano']);
    $bissexto = "";
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0)
        $bissexto = "é";
    else
        $bissexto = "não é";
    echo "<h3>O ano $ano <span style='color: green'>$bissexto</span> bissexto!</h3>";
    ?>
</body>

</html>