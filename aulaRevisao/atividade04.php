<?php
$users = file_get_contents("https://jsonplaceholder.typicode.com/users");
$users = json_decode($users, true);

foreach ($users as $user) {
    echo "nome: " . $user['name'] . " | email" . $user['email'] . " | cidade " . $user['address']['city'] . "<br>";
} 