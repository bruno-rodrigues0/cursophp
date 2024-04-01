<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
           $nome = $_GET["nome"];      
           $snome = $_GET["sobrenome"];
           
           print("É um prazer te conhecer, $nome $snome!");
        ?>
    </main>
</body>
</html>