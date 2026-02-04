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
?>