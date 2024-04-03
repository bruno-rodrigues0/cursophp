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
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // $num = 0x1A; //hexadecimal
        // $num1 = 0b11010; //binário
        // $num2 = 032; //octal
        // $num3 = 3e2; //3.10^2
        // $bol = false;

        // print "$num $num1 $num2\n";
        // var_dump($num3);

        // $num3 = (integer) 3e2; // naturalmente float, forçado a ser integer (coerção)


        // var_dump($num3);


        // arrys

        // $array = [6, true, 3.14, 'Bruno'];

        // print($array);

        // var_dump($array);

        // objects

        class Pessoa{
            public string $name;

            public function __construct($name){
                $this -> name = $name; 
            }
        }

        $p = new Pessoa("Bruno");
            
        print($p -> name)


    ?>
</body>
</html>