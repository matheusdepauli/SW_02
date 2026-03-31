<?php
    function calcularFatorial($n) {
        $resultado = 1;
            for ($i = $n; $i > 1; $i--) {
                $resultado *= $i;
            }
            return "O fatorial de $n é: $resultado";
}
?>