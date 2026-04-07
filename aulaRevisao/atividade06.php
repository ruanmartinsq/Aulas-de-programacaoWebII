<?php
$itens = [
    [
        "nome" => "Arroz",
        "preco" => 25.00,
        "quantidade" => 2
    ],
    [
        "nome" => "Feijão",
        "preco" => 8.50,
        "quantidade" => 3
    ],
    [
        "nome" => "Leite",
        "preco" => 4.75,
        "quantidade" => 6
    ],
    [
        "nome" => "Óleo",
        "preco" => 7.20,
        "quantidade" => 1
    ]
];

foreach ($itens as $item) {
    echo "Nome: " . $item["nome"] . "<br>";
    echo "Preço: R$ " . $item["preco"] . "<br>";
    echo "Quantidade: " . $item["quantidade"] . "<br><br>";
}