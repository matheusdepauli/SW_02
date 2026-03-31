<?php
    function gerarNumerosAleatorios() {
        $aleatorios = [];
            for ($i = 1; $i <= 10; $i++) {
                $aleatorios[] = rand(1, 100);
            }
            return $aleatorios;
    }
?>