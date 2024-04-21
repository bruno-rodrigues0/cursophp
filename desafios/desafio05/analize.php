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
        $numero = $_POST['value'];
    ?>

    <div>
        <h1>Analizador de núemro real</h1>
        <p>Analizando o núemro <?php ?> informado pelo usuário:</p>
        <ul>
            <li>A parte inteira do núemro é <?php echo number_format(floor($numero), 0, '', '.')?></li>
            <li>A parte fracionária do número é <?php echo number_format(abs($numero - floor($numero)), 3, ',', '.')?></li>
        </ul>
    </div>
</body>
</html>