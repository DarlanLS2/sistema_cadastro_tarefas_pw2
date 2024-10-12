<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atualizar Evento</h1>
    <form action="" method="post">
        <label for="id">Digite o id do Evento que deseja atualizar:</label>
        <input type="number" name="id"/>
        <input type="submit" value="enviar"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include "../funcoes.php";
            $id = $_POST["id"];
            exibirFormularioUpdate($id);
        }
    ?>
</body>
</html>