<?php
require_once 'funcao_curl.php';

if (!isset($_GET['marca'], $_GET['modelo'], $_GET['ano'])) {
    die("Parâmetros inválidos.");
}

$marca  = $_GET['marca'];
$modelo = $_GET['modelo'];
$ano    = $_GET['ano'];

$url = "https://parallelum.com.br/fipe/api/v1/carros/marcas/$marca/modelos/$modelo/anos/$ano";
$dados = consultarAPI($url);

if (!is_array($dados)) {
    die("Erro ao consultar preço.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Preço FIPE</title>
</head>
<body>

<h1>Resultado FIPE</h1>

<p><strong>Marca:</strong> <?= $dados['Marca'] ?></p>
<p><strong>Modelo:</strong> <?= $dados['Modelo'] ?></p>
<p><strong>Ano:</strong> <?= $dados['AnoModelo'] ?></p>
<p><strong>Combustível:</strong> <?= $dados['Combustivel'] ?></p>
<p><strong>Valor:</strong> <?= $dados['Valor'] ?></p>

<a href="index.php">⬅ Nova consulta</a>

</body>
</html>
