<?php
function tabuada($numero) {
    $saida = "";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        $saida .= "$numero x $i = $resultado <br>";
    }

    return $saida;
}

    echo tabuada(67);
?>