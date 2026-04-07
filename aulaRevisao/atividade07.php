<?php
$celulares = [
    [
        "modelo" => "iPhone 13",
        "preco" => 5000,
        "quantidade" => 2
    ],
    [
        "modelo" => "Samsung S22",
        "preco" => 4000,
        "quantidade" => 3
    ],
    [
        "modelo" => "Xiaomi Redmi Note 11",
        "preco" => 1500,
        "quantidade" => 5
    ]
];

$totalGeral = 0;

foreach ($celulares as $celular) {
    $totalModelo = $celular["preco"] * $celular["quantidade"];

    echo "Modelo: " . $celular["modelo"] . "<br>";
    echo "Total por modelo: R$ " . $totalModelo . "<br><br>";

    $totalGeral += $totalModelo;
}

echo "Total geral do estoque: R$ " . $totalGeral;

?>