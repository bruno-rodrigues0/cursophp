<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <? 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia ". date("d/m/Y");
        echo " e a hora atual é ". date("G:i:s T");
    ?>
</body>
</html>