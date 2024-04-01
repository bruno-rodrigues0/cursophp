<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <?php 
        // concatenação
        
        $curso = "Curso";
        $PHP = "PHP";

        $info = "$curso de $PHP \u{1F418} eh bom"; 

        print($info);

        const ESTADO = "MG";

        print("<br> Mono em ESTADO");
        print("<br> Mono em " . ESTADO);

        $data = date('Y');

        print("<br> Estamos no ano de $data");

        $nom = "Rodrigo";
        $snom = "Nogueira";

        print("<br>$nom \"Minotauro\" $snom");

        echo <<< OXI
            <br> Pensei q fosse uma template string :ccc <br>
            Assim... eh uma template string, so n funfa pra HTML
            <br>
            <br>
            $nom "Minotauro" $snom
        OXI;

        
    ?>
</body>
</html>