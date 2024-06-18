<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
</head>

<body>
    <?php
    $ve = $_GET['velocidade_media'];
    $km = $_GET['distancia_viagem'];
    $co = $_GET['consume_medio'];
    $ho = number_format($km / $ve, 2, ".", "");
    $comb = number_format($km / $co, 2, ".", "");
    echo "<h3>Total horas: <span style='color: green'>$ho</span></h3>";
    echo "<h3>Total combustivel: <span style='color: green'>$comb<span></h3>"
    ?>
</body>

</html>