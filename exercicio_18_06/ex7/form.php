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
    $idade = intval($_POST['idade']);
    echo "<h3><span style='color: green'>$nome</span> possui <span style='color: green'>" . ($idade * 365) . "</span> dias</h3>";
    ?>
</body>

</html>