<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 02</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <?php 
        function gerarRandom(){
            $numero = mt_rand(0, 100);
            return $numero;
        }
    ?>

    <div>
        <h1>Trabalhando com números aleatórios</h1>

        <p>Gerando um número aleatório entre 0 e 100...</p>
        <p>O valro gerado foi <strong><?php echo gerarRandom()?></strong></p>

        <a href=""><button>Gerar outro numero</button></a>
    </div>
</body>
</html>