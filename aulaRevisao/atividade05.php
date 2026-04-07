<?php
$post = file_get_contents("https://jsonplaceholder.typicode.com/posts");
$post = json_decode($post, true);

foreach ($post as $aux) {
    echo "Titulo: " . $aux['title'] . " | " . "Conteúdo: " . $aux['title'] . " | " . "id: " . $aux['id'] . "<br>";
}