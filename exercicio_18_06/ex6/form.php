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
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);
    $frequencia = $_POST['frequencia'];
    echo "<h3>O aluno <span style='color: green'>$nome</span> teve as notas <span style='color: green'>$nota1</span>, <span style='color: green'>$nota2</span>, com frequência de <span style='color: green'>$frequencia%</span></h3>";
    if ((($nota1 + $nota2) / 2) < 5)
        echo "<h3>Reprovado por nota</h3>";
    if ($frequencia < 75)
        echo "<h3>Reprovado por Frequência</h3>";
    if ((($nota1 + $nota2) / 2) >= 5 && $frequencia >= 75)
        echo "<h3>Aprovado</h3>";
    ?>
</body>

</html>