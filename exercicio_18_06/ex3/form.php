<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nome_estado = $_GET['nome_estado'];
    $capital = "";
    switch ($nome_estado) {
        case "AC":
            $capital = "Rio Branco";
            break;
        case "AL":
            $capital = "Maceió";
            break;
        case "AP":
            $capital = "Macapá";
            break;
        case "AM":
            $capital = "Manaus";
            break;
        case "BA":
            $capital = "Salvador";
            break;
        case "CE":
            $capital = "Fortaleza";
            break;
        case "ES":
            $capital = "Vitória";
            break;
        case "GO":
            $capital = "Goiânia";
            break;
        case "MA":
            $capital = "São Luís";
            break;
        case "MT":
            $capital = "Cuiabá";
            break;
        case "MS":
            $capital = "Campo Grande";
            break;
        case "MG":
            $capital = "Belo Horizonte";
            break;
        case "PA":
            $capital = "Belém";
            break;
        case "PB":
            $capital = "João Pessoa";
            break;
        case "PR":
            $capital = "Curitiba";
            break;
        case "PE":
            $capital = "Recife";
            break;
        case "PI":
            $capital = "Teresina";
            break;
        case "RJ":
            $capital = "Rio de Janeiro";
            break;
        case "RN":
            $capital = "Natal";
            break;
        case "RS":
            $capital = "Porto Alegre";
            break;
        case "RO":
            $capital = "Porto Velho";
            break;
        case "RR":
            $capital = "Boa Vista";
            break;
        case "SC":
            $capital = "Florianópolis";
            break;
        case "SP":
            $capital = "São Paulo";
            break;
        case "SE":
            $capital = "Aracaju";
            break;
        case "TO":
            $capital = "Palmas";
            break;
    }
    echo "<h3>A Capital de $nome_estado é <span style='color: green'>$capital</span></h3>";
    ?>
</body>

</html>