<?php
    // Função que recebe um array de números e retorna a soma dos elementos
    function somaArray($numeros) {
        $soma = 0;
        foreach ($numeros as $valor) {
                $soma += $valor;
        }

        return $soma;
    }

    $vetor = [1, 2, 3, 4, 5];
    echo somaArray($vetor);
?>