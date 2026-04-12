<?php
$itensMercado = [
    [
    'nome'=> 'Bala',
    'preco'=> 12.5,
    'quantidade'=>10,
    ],
    [
    'nome'=> 'Chiclete',
    'preco'=> 11.5,
    'quantidade'=>21,
    ],
    [
    'nome'=> 'Lapis',
    'preco'=> 5,
    'quantidade'=>1,
    ],
    [
    'nome'=> 'Pote',
    'preco'=> 50,
    'quantidade'=>100,
    ],
    [
    'nome'=> 'Peixe',
    'preco'=> 1.5,
    'quantidade'=> 3,
    ],
];

$totalItem = 0;
$totalCompra = 0;
$itemMaisCaro = $itensMercado[0];
$itemMaisBarato = $itensMercado[0];

foreach ($itensMercado as $itens) {
    $totalItem = $itens['preco'] * $itens['quantidade'];
    echo 'Total do item ' . $itens['nome'] . ' R$' . $totalItem . '<br>';
    $totalCompra += $totalItem;

    if ($itens['preco'] > $itemMaisCaro['preco'] ) {
        $itemMaisCaro = $itens;
    }

    if ($itens['preco'] < $itemMaisBarato['preco'] ) {
        $itemMaisBarato = $itens;
    }
}


echo 'Item mais barato: ' . $itemMaisBarato['nome'] . ' | R$'. $itemMaisBarato['preco'] . ' | ' . $itemMaisBarato['quantidade'] .'<br>';
echo 'Item mais caro: ' . $itemMaisCaro['nome'] . ' | R$'. $itemMaisCaro['preco'] . ' | ' . $itemMaisCaro['quantidade'] .'<br>';
echo 'Total de itens no carrinho: ' . $totalCompra .'<br>';