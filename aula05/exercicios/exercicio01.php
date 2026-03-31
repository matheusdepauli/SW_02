<?php

$produtos = [
    [
        'nome' => 'Notebook',
        'preço' => 2500.00,
        'quantidade' => 5
    ],
    [
        'nome' => 'Mouse',
        'preço' => 45.50,
        'quantidade' => 20
    ],
    [
        'nome' => 'Teclado',
        'preço' => 150.00,
        'quantidade' => 10
    ]
];

$json = json_encode($produtos, JSON_PRETTY_PRINT);
file_put_contents("produtos1.json", $json);

echo "Conteúdo do JSON:";
echo $json;

?>
