<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA PHP</title>
</head>
<body>
    <h1>PRODUTOs EM PHP</h1>
    <form action="processa.php" method="POST">
        <label>ID:</label><br>
        <input type="number" name="id"><br><br>

        <label>Título:</label><br>
        <input type="text" name="title"><br><br>

        <label>Preço:</label><br>
        <input type="number" name="price" step="0.01"><br><br>

        <label>Descrição:</label><br>
        <input type="text" name="description"><br><br>

        <label>Categoria:</label><br>
        <input type="text" name="category"><br><br>

        <label>Imagem:</label><br>
        <input type="file" name="image"><br><br>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
