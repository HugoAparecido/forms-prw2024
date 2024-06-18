<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $err = 0;
    if (isset($_POST['prontuario']))
        $prontuario = $_POST['prontuario'];
    else {
        echo "<h3>Prontuário não deve estar em branco</h3>";
        $err = 1;
    }
    if (isset($_POST['nome']))
        $nome = $_POST['nome'];
    else {
        echo "<h3>Nome não deve estar em branco</h3>";
        $err = 1;
    }
    if (isset($_POST['idade'])) {
        if ($_POST['idade'] >= 15 && $_POST['idade'] <= 75)
            $idade = $_POST['idade'];
        else {
            echo "<h3>A idade deve estar entre 15 e 75 anos</h3>";
            $err = 1;
        }
    }
    if (isset($_POST['periodo'])) {
        if ($_POST['periodo'] === "V" || $_POST['periodo'] === "F")
            $periodo = $_POST['periodo'];
        else {
            echo "<h3>O período deve ser V ou N (Vespertino ou Noturno)</h3>";
            $err = 1;
        }
    }
    if (isset($_POST['modulo'])) {
        if (intval($_POST['modulo']) >= 1 && intval($_POST['modulo']) <= 4)
            $modulo = $_POST['modulo'];
        else {
            echo "<h3>O módulo deve estar entre 1 e 4</h3>";
            $err = 1;
        }
    }
    if ($err != 1)
        echo "<h3>Todos os valores estão corretos</h3>";
    ?>
</body>

</html>