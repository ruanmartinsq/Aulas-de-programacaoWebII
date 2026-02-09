<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Cadastro de USUARIO ---------</h1>
    <form action="processausuarios.php" method="POST" >
        <p>
            <label for="id">ID do Usuário:</label>
            <input type="number" name="id" autofocus>
        </p>

        <p>
            <label for="username">Nome do Usuário:</label>
            <input type="text" name="username">
        </p>

        <p>
            <label for="email">Email do Usuário:</label>
            <input type="text" name="email">
        </p>
        
        <p>
            <label for="password">Senha do Usuário:</label>
            <input type="password" name="password">
        </p>

        <input type="submit" value="Cadastrar Conta">
    </form>
</body>
</html>
