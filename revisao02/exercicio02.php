<?php

$funcionario = [
    [
       'nome' => 'Ruan',
       'profissao' => 'Dev backend',
       'salarios' => [1200, 1220, 750, 8730, 2000],
    ],
    [
       'nome' => 'AAAA',
       'profissao' => 'Dev front',
       'salarios' => [500, 3211, 55, 800, 1000],
    ],
];

$acima2000 = 0;
$abaixo2000 = 0;
$maiorSalarioGeral = 0;
$menorSalarioGeral = PHP_INT_MAX;
$pessoaMaiorSalario = '';
$pessoaMenorSalario = '';

foreach ($funcionario as $valor) {
    $totalSalario = 0;
    $maiorSalarioPessoal = 0;
    $menorSalarioPessoal = PHP_INT_MAX;
    
    foreach ($valor['salarios'] as $salario) {
        $totalSalario += $salario;

        if ($salario > $maiorSalarioPessoal) {
            $maiorSalarioPessoal = $salario;
        }
        if ($salario < $menorSalarioPessoal) {
            $menorSalarioPessoal = $salario;
        }

        if ($salario > 2000) {
            $acima2000++;
        } else {
            $abaixo2000++;
        }

        if ($salario > $maiorSalarioGeral) {
            $maiorSalarioGeral = $salario;
            $pessoaMaiorSalario = $valor['nome'];
        }
        if ($salario < $menorSalarioGeral) {
            $menorSalarioGeral = $salario;
            $pessoaMenorSalario = $valor['nome'];
        }
    }

    $media = $totalSalario / count($valor['salarios']);
    echo 'Funcionario | ' . $valor['nome'] . '<br>';
    echo 'Media salarial | ' . $media . '<br>';
    echo 'Maior salario | ' . $maiorSalarioPessoal . '<br>';
    echo 'Menor salario | ' . $menorSalarioPessoal . '<br><br>';
}

echo 'Salarios acima de 2000 | ' . $acima2000 . '<br>';
echo 'Salarios abaixo de 2000 | ' . $abaixo2000 . '<br>';
echo 'Pessoa com maior salario | ' . $pessoaMaiorSalario . ' | ' . $maiorSalarioGeral . '<br>';
echo 'Pessoa com menor salario | ' . $pessoaMenorSalario . ' | ' . $menorSalarioGeral . '<br>';