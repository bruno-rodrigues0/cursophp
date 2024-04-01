<?php 

    $r = abs(-243);

    print("Módulo: $r");

    $base_convert = base_convert(23, 10, 2);

    print("<br> Convertendo bases numericas: 128 -> $base_convert");

    // ceil, floor, round

    //hypot() caucula hypotenusa

    $div = intdiv(5, 2);

    print("<br>Divisao inteira: $div");

    $array = [4, 651, 6, 12, 4];

    print("<br>Valor minimo:  " . min($array));
    print("<br>Valro maximo: " . max($array));

    $pi = pi(); // ou M_PI

    print("<br> $pi");

    // sin(), cos(), tan()

    $res = sqrt(91);

    print("<br>Raiz de 91: $res");