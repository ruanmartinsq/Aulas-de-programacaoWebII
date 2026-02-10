<?php
require_once 'funcao_curl.php';

if (!isset($_GET['marca'], $_GET['modelo'])) {
    die("Parâmetros inválidos.");
}

$marca  = $_GET['marca'];
$modelo = $_GET['modelo'];

$url = "https://parallelum.com.br/fipe/api/v1/carros/marcas/$marca/modelos/$modelo/anos";
$anos = consultarAPI($url);

if (!is_array($anos)) {
    die("Nenhum ano encontrado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Anos</title>
</head>
<body>

<h1>Anos disponíveis</h1>

<ul>
<?php foreach ($anos as $ano): ?>
    <li>
        <a href="preco.php?marca=<?= $marca ?>&modelo=<?= $modelo ?>&ano=<?= $ano['codigo'] ?>">
            <?= $ano['nome'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<a href="modelos.php?marca=<?= $marca ?>">⬅ Voltar para modelos</a>

</body>
</html>
