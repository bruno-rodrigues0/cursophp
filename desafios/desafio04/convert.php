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

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-21-2024\'&@dataFinalCotacao=\'04-21-2024\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $convert = $dados['value'][0]['contacaoCompra'];
    ?>    

    <div>
        <h1>Conversor de Moedas v2.0</h1>

        <p>Seus R$ <?php echo number_format((float)$value, 2, ',', '')?> equivalem a <strong>US$ <?php echo number_format((float)$convert, 2, ',', '') ?></strong></p>

        <span><strong>*Cotação fixa de R$5, 08</strong> informada diretamento no código</span>

        <button onclick="javascript: history.back(-1)">&lt; Voltar</button>
    </div>
</body>
</html>