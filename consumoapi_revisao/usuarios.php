<?php
$url = "https://fakestoreapi.com/users";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$usuarios = json_decode($response, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
</head>
<body>
<h1>Lista de Usuários</h1>
<ul>
<?php foreach($usuarios as $usuario): ?>
    <li>
        <?= $usuario['name']['firstname'] ?> <?= $usuario['name']['lastname'] ?> -
        <?= $usuario['email'] ?>
    </li>
<?php endforeach; ?>
</ul>
<a href="index.php">Voltar à lista de produtos</a>
</body>
</html>