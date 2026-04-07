<?php

$idades = [18, 22, 30, 25, 40, 35, 28, 19, 50, 45, 33, 27];

$media = array_sum($idades) / count($idades);
$maior = max($idades);
$menor = min($idades);


echo "Média das idades: " . $media . "<br>";
echo "Maior idade: " . $maior . "<br>";
echo "Menor idade: " . $menor . "<br>";
?>