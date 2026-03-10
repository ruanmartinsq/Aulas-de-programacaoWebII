<?php
$url = "https://fakestoreapi.com/products";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$produtos = json_decode($response, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h1>Lista de Produtos</h1>
<ul>
<?php foreach($produtos as $produto): ?>
    <li>
        <a href="produto.php?id=<?= $produto['id'] ?>">
            <?= $produto['title'] ?> - $<?= $produto['price'] ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
<a href="usuarios.php">Ver Usuários</a>
</body>
</html>