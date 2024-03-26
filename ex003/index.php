<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #2d2d2d;
            color: white;
            font-family: sans-serif;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php 
        $nome = "Bruno";
        $sobrenome = "Rodrigues";
        const pais = "Brasil";

        print "Muito prazer, $nome $sobrenome! Você mora no ". pais;
    ?>
</body>
</html>