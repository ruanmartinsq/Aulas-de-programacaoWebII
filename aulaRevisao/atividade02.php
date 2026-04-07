<?php
$salarios = [1200, 2000, 3000, 120, 3444, 4455, 2330, 990];
$mediaSalarial = 0;
$maiorSalario = $salarios[0];
$menorSalario = $salarios[0];
$salarioAbaixo = 0;
$salarioAcima = 0;

foreach ($salarios as $salario) {
    $mediaSalarial += $salario;
    if ($salario > $maiorSalario) {
        $maiorSalario = $salario;
    }

    if ($salario < $menorSalario) {
        $menorSalario = $salario;
    }

    if ($salario >= 2000) {
        $salarioAcima++;
    } else {
        $salarioAbaixo++;
    }
}

echo "Media salarial: " . $mediaSalarial/8;
echo "<br>";
echo "Salários maiores que 2000: " . $salarioAcima;
echo "<br>";
echo "Salários menores que 2000: " . $salarioAbaixo;
echo "<br>";
echo "Maior salário: " . $maiorSalario;
echo "<br>";
echo "Menor salário: " . $menorSalario;