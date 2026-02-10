<?php
require_once 'funcao_curl.php';

if (!isset($_GET['marca'])) {
    die("Marca não informada.");
}

$marca = $_GET['marca'];

$url = "https://parallelum.com.br/fipe/api/v1/carros/marcas/$marca/modelos";
$resultado = consultarAPI($url);

if (!isset($resultado['modelos']) || !is_array($resultado['modelos'])) {
    die("Nenhum modelo encontrado.");
}

$modelos = $resultado['modelos'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Modelos</title>
</head>
<body>

<h1>Modelos</h1>

<ul>
<?php foreach ($modelos as $modelo): ?>
    <li>
        <a href="anos.php?marca=<?= $marca ?>&modelo=<?= $modelo['codigo'] ?>">
            <?= $modelo['nome'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<a href="marcas.php">⬅ Voltar para marcas</a>

</body>
</html>
