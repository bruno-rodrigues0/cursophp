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
        $value = $_GET["value"];
        $cotacao = 5.08;

        $convert = $value / $cotacao;
    ?>    

    <div>
        <h1>Conversor de Moedas v1.0</h1>

        <p>Seus R$ <?php echo number_format((float)$value, 2, ',', '')?> equivalem a <strong>US$ <?php echo number_format((float)$convert, 2, ',', '') ?></strong></p>

        <span><strong>*Cotação fixa de R$5, 08</strong> informada diretamento no código</span>

        <button onclick="javascript: history.back(-1)">&lt; Voltar</button>
    </div>
</body>
</html>