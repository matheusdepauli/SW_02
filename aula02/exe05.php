<?php
    //Função sem parametros e sem retorno

    function mostra_array($vetor){
        foreach ($vetor as $valor) {
            echo $valor . "<br>";
        }
     echo "<hr>";
    }

    $numero = [1,2,3,4,5];
    $numero2 = [1,2,3,4,5];
    $numero3 = ['matheus', "de", "pauli"];


    mostra_array($numero);
    mostra_array($numero2);
    mostra_array($numero3);

?>