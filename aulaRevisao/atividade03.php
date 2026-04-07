<?php
$temperatura = [12, 23, 34, 56, 21, 23, 56, 32, 9, 11];

$tempMedia = 0;
$maiorTemp = $temperatura[0];
$menorTemp = $temperatura[0];
$tempMaiorTrinta = 0;
$tempMenorTrinta = 0;

foreach ($temperatura as $temp) {
    if ($temp > 30) {
        $tempMaiorTrinta++;
    } else {
        $tempMenorTrinta++;
    }

    if ($temp >= $maiorTemp) {
        $maiorTemp = $temp;
    } else {
        $menorTemp = $temp;
    }

    $tempMedia += $temp;
}

echo "Temperatura media: " . $tempMedia/10;
echo "<br>";
echo "Temperaturas maiores que 30 graus: " . $maiorTemp;
echo "<br>";
echo "Temperaturas menores que 30 graus: " . $menorTemp;
echo "<br>";
