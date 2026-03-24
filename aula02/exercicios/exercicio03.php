<?php
function parOuImpar($numero) {
    if ($numero % 2 === 0) {
        echo "$numero é par. <br>";
    } else {
        echo "$numero é ímpar. <br>";
    }
}

parOuImpar(4);
parOuImpar(7);
?>