<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = htmlspecialchars($_POST["id"]);
        $title = htmlspecialchars($_POST["title"]);
        $price = htmlspecialchars($_POST["price"]);
        $description = htmlspecialchars($_POST["description"]);
        $category = htmlspecialchars($_POST["category"]);


        echo "ID: " . $id . "<br>" .
            "Título do produto: " . $title . "<br>" .
            "Preço do produto: " . $price . "<br>" .
            "Descrição do produto: " . $description . "<br>" .
            "Categoria do produto: " . $category . "<br>";
    }

    $dados = file_get_contents("dados.json");
    $dados = json_decode($dados, true);
    $dados = $dados ?: [];

    $lastId = 0;

    foreach ($dados as $dado) {
        if ($dado['id'] > $lastId) {
            $lastId = $dado['id'];
        }
    }

    $lastId++;

    $novo = [
        "id" => $lastId,
        "title" => $_POST["title"],
        "price" => $_POST["price"],
        "description" => $_POST["description"],
        "category" => $_POST["category"],
    ];

    $dados[] = $novo;

    file_put_contents("dados.json", json_encode($dados, JSON_PRETTY_PRINT));
    header('Location: index.php')

?>