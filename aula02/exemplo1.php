<?php
    $a = 10;
    $b = 5;

    $soma = $a +$b;

    echo "A Soma é " . $soma;
    echo "<br>";
    echo "O valor da variavel é: ";
    echo var_dump($a);
    echo "<hr>";
    
    // if ($a == $b) {
    //     echo "A variavel A é maior que a variavel B";
    // }else {
    //     echo "Elas são diferentes";
    // }

    $n1 = 4;
    $n2 = 5;
    $n3 = 6;

    $media = $n1 + $n2 + $n3 / 3;
    
    if ($media>5) {
        echo "Aprovado porque sua nota foi $media";
    } else{
        if (media<4) {
            echo "Reprovado porque sua nota foi $media";
        } else{
            echo "RECUPERAÇÃo";
        }
        echo "<BR>";
    }
    echo "<br>";
    $dia = 2;

    echo "<br>";

    switch ($dia) {
        case '1':
            echo "Domingo";
        case '2':
            echo "Segunda";
        case '3';
            echo "Terça";
        case '4';
            echo "Quarta";        
        default:
            echo "DIA INVÁLIDO";
    }

    echo "<br>";
    for ($i=1; $i < 11; $i++) { 
        echo "$i - ";
    }

    while ($a <= 10) {
        echo "$a - ";
        $a++;
    }
    
    $b = 1;
    do {
        echo "$b -";
        $b++;
    } while ($b <= 10);

    echo "<br>";

    $nomes = ['fulano' , 'Ciclano' , 'Beltrano'];
    foreach ($nomes as $nomes) 
    echo "O nome é: $nome <br>";
    {
        # code...
    }
    ?>
    