<?php
    function num($numero) {
        if ($numero % 2 === 0) {
            return "O número $numero é Par.";
        } else {
            return "O número $numero é Ímpar.";
        }
    }

    echo num(9);
?>