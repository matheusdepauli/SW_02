<?php
$email = "maria@email.com";
$usuarios_json = file_get_contents("usuarios.json");
$dados = json_decode($usuarios_json, true);
$encontrado = false;

foreach ($dados['usuarios'] as $usuario) {
    if ($usuario['email'] === $email) {
        echo "Usuário encontrado: <br>" . $usuario['nome'] . " <br> " . $usuario['email'] . " <br> " . $usuario['telefone'];
        $encontrado = true;
        break;
    }
}

if (!$encontrado) {
    echo "Usuário não encontrado.";
}
?>