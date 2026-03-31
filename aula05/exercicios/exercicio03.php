<?php

$produtos_json = file_get_contents("produtos.json");
$produtos = json_decode($produtos_json, true);

$novo_produto = [
    "nome" => "Monitor",
    "preco" => 1200.00,
    "quantidade" => 3
];
$produtos[] = $novo_produto;

$json_atualizado = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $json_atualizado);

echo "Novo produto adicionado com sucesso!";
?>