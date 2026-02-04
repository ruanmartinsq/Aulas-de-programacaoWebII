<?php
    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $price =  $_POST["price"];
        $description = $_POST["description"];
        $category = $_POST["category"];


        echo "ID: " . $id . "<br>" .
            "Título do produto: " . $title . "<br>" .
            "Preço do produto: " . $price . "<br>" .
            "Descrição do produto: " . $description . "<br>" .
            "Categoria do produto: " . $category . "<br>";
    }
?>