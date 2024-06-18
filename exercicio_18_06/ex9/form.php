<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome = $_POST['nome'];
    $horario = explode(":", $_POST['horario']);
    $hora = intval($horario[0]);
    $minutos = intval($horario[1]);
    $saudacao = "";
    if ($hora <= 12 && $minutos == 0 || $hora < 12)
        $saudacao = "bom dia!";
    elseif ($hora <= 18 && $minutos == 0 || $hora < 18)
        $saudacao = "boa tarde!";
    else
        $saudacao = "boa noite!";
    echo "<h3>Olá <span style='color: green'>$nome</span>, <span style='color: green'>$saudacao</span></h3>";
    ?>
</body>

</html>