<?php
    function tabuada($numero) {
        echo "<h3>Tabuada do $numero</h3>";
        echo "<ul>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
    }

    tabuada(5);
?>
