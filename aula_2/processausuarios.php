<?php   

    $arquivo = "dadosusuario.json";

    $texto = file_get_contents($arquivo);
    $data = json_decode($texto, true);
    $data = $data ? : [];

    if($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $emailUser = $_POST["email"];
        $passwordUser = $_POST["password"];
        
        $newUsers = [
            "id" => $id,
            "username" => $username,
            "email" => $emailUser,
            "password" => $passwordUser
        ];

        $data[] = $newUsers;
        $newJson = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($arquivo, $newJson);

        header('Location: index.php');
        exit;

    }

    
?>