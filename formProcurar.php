<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="id"/>
        <input type="submit"/>
    </form>
    
    <?php
    include "./funcoes.php"; // Importa as funções
    exibirTarefaPorId();
    ?>
</body>
</html>