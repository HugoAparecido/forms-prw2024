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
    $descricao = $_POST['descricao'];
    $linguagens_que_sabe = $_POST['linguagens_que_sabe'];
    $materia = $_POST['materia'];
    $melhor_ano = $_POST['melhor_ano'];
    echo "<h3>Olá! Meu nome é <span style='color: green'>$nome</span>, sendo que: <span style='color: green'>$descricao</span>.</h3>";
    echo "<h3>Eu sei as linguagens <span style='color: green'>" . implode(', ', $linguagens_que_sabe) . "</span>, sendo que minha matéria do terceiro preferida é <span style='color: green'>$materia</span> e adorei o meu <span style='color: green'>$melhor_ano</span> ano aqui na escola</h3>";
    ?>
</body>

</html>