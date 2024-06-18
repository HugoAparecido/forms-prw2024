<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $pequenas = intval($_GET['pequenas']);
    $medias = intval($_GET['medias']);
    $grandes = intval($_GET['grandes']);
    echo "<h3>O valor arrecadado foi de R$<span style='color: green'>" . number_format(($pequenas * 10 + $medias * 12 + $grandes * 15), 2, ",", ".") . "</span></h3>";
    ?>
</body>

</html>