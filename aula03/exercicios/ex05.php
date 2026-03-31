<?php
    function somarElementos($meuArray) {
        $soma = 0;
            foreach ($meuArray as $valor) {
                $soma += $valor;
            }
            return "A soma total dos elementos é: $soma";
}
?>