<?php
$id = $_GET['id'];
$url = "https://fakestoreapi.com/products/$id";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$produto = json_decode($response, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $produto['title'] ?></title>
</head>
<body>
<h1><?= $produto['title'] ?></h1>
<img src="<?= $produto['image'] ?>" width="200">
<p><strong>Preço:</strong> $<?= $produto['price'] ?></p>
<p><strong>Descrição:</strong> <?= $produto['description'] ?></p>
<p><strong>Categoria:</strong> <?= $produto['category'] ?></p>

<a href="index.php">Voltar à lista de produtos</a>
</body>
</html>