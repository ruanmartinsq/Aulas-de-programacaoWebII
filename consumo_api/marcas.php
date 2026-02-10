<?php
require_once 'funcao_curl.php';

$url = "https://parallelum.com.br/fipe/api/v1/carros/marcas";
$marcas = consultarAPI($url);

if (!is_array($marcas)) {
    die("Erro ao carregar marcas.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Marcas</title>
</head>
<body>

<h1>Marcas de carros</h1>

<ul>
<?php foreach ($marcas as $marca): ?>
    <li>
        <a href="modelos.php?marca=<?= $marca['codigo'] ?>">
            <?= $marca['nome'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<a href="index.php">⬅ Voltar ao início</a>

</body>
</html>
