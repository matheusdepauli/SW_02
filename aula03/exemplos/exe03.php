<?php

    //FUNÇÃO COM PARÂMETROS E SEM RETORNO
    function calcula_quadrado($a){
        $x = $a * $a;

        echo "$x <br>";
    }

    calcula_quadrado(4);
    calcula_quadrado(3);
    calcula_quadrado(5);

    echo "<hr>";

    function soma($x,$y){
        $soma = $x + $y;

        echo "A soma é: $soma <br>";
    }

    soma(4,5);
?>