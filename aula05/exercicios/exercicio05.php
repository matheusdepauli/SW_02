<?php
$nomeParaRemover = "Monitor";
$json = file_get_contents("produtos.json");
$produtos = json_decode($json, true);
$removido = false;

foreach ($produtos as $chave => $p) {
    if ($p['nome'] === $nomeParaRemover) {
        unset($produtos[$chave]);
        $removido = true;
    }
}

$produtos = array_values($produtos);
$novoJson = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents("produtos.json", $novoJson);
if ($removido) {
    echo "Produto '$nomeParaRemover' removido com sucesso. <br>";
} else {
    echo "Produto '$nomeParaRemover' não encontrado. <br>";
}
