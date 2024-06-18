<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tabuada = intval($_GET['tabuada']);
    for ($i = 0; $i < 11; $i++) {
        echo "<h3> $tabuada x $i = <span style='color: green'>" . ($tabuada * $i) . "</span></h3>";
    }
    ?>
</body>

</html>