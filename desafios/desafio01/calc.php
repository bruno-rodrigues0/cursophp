<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php 
        $numero = $_GET["numero"];
        $ant = $numero - 1;
        $suc = $numero + 1;
    ?>

    <div>
        <h1>Resultado Final</h1>

        <p>O número escolhido foi <?php echo $numero?></p>
        <p>O seu antecessor é <?php echo  $ant?></p>
        <p>O seu sucessor é <?php echo $suc?></p>
        
        <button onclick="javascript: history.back(-1)">&lt; Voltar</button>
    </div>
</body>
</html>