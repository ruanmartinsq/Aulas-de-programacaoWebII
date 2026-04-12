<?php

$processadores = [
    ['modelo' => 'ryzen7600g', 'preco' => 780.67, 'quantidade' => 2],
    ['modelo' => 'i5 10th', 'preco' => 580.67, 'quantidade' => 10],
    ['modelo' => 'ryzen5600g', 'preco' => 480.67, 'quantidade' => 12],
    ['modelo' => 'i3 10th', 'preco' => 580.67, 'quantidade' => 11],
    ['modelo' => 'i7 13th', 'preco' => 1008.67, 'quantidade' => 5],
];

$valorTotalModelo = 0;
$totalGeralEstoque = 0;
$processaMaisCaro = $processadores[0];
$processaMaisBarato = $processadores[0];

foreach ($processadores as $processador) {
    $valorTotalModelo = $processador['preco'] * $processador['quantidade'];
    echo 'Valor total do modelo: ' . $processador['modelo'] . ' | '. $valorTotalModelo . '<br>';
    $totalGeralEstoque += $valorTotalModelo;

    if ($processador['preco'] > $processaMaisCaro['preco']) {
        $processaMaisCaro = $processador;
    }

    if ($processador['preco'] < $processaMaisBarato['preco']) {
        $processaMaisBarato = $processador;
    }
}

echo 'Processador mais caro' . ' | ' . $processaMaisCaro['modelo'] . ' | ' . $processaMaisCaro['preco'] . ' | ' . $processaMaisCaro['quantidade'] .'<br>';
echo 'Processador mais barato' . ' | ' . $processaMaisBarato['modelo'] . ' | ' . $processaMaisBarato['preco'] . ' | ' . $processaMaisBarato['quantidade'] .'<br>';