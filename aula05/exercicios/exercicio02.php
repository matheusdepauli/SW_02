<?php
    $usuarios = file_get_contents("usuarios.json");
    $dados = json_decode($usuarios, true);
    $nomes = array_column($dados['usuarios'], 'nome');
    $emails = array_column($dados['usuarios'], 'email');
    echo "Nomes dos usuários: <br> " . implode("<br>", $nomes);
    echo "<br>Emails dos usuários: <br> " . implode("<br>", $emails);
?>