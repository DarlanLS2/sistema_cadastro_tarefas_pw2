<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>

<body>
  <h1>Eventos:</h1>
  <div class="boxTarefas">
    <?php
      include "./funcoes.php"; // Importa as funções
      exibirTarefas();
      exibirBotaoCadastro();
    ?>
  </div>
  
  <?php
    exibirIcones();
    criarFuncoesDeRedirecionamento();
  ?>
</body>
</html>