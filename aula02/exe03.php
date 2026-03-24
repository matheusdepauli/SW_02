<?php
    //Função sem parametros e sem retorno
    function calcula_quadrado($a){
        $x = $a * $a;
        echo "$x <br>";
    }

    calcula_quadrado(8.18535277188);
    calcula_quadrado(3);
    calcula_quadrado(5);

    echo "<hr>";

     function soma($x,$y){
        $soma = $x + $y;
        echo "$soma <br>";
    }

    $num1 = 6;
    $num2 = 7;

    soma(6,7);
?>