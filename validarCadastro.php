<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Variaveis do formulario
      $nomeEvento = $_POST['nom_eve'];
      $dataEvento = $_POST['dt_event'];
      $horaInicio = $_POST['hr_ini'];
      $horaFim = $_POST['hr_fim'];
      $descEvento = $_POST['desc_eve'];
      $localEvento = $_POST['loc_eve'];
      $responsavelEvento = $_POST['resp_eve'];
      // Conexao com o banco
      $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
      // Inserindo os dados do formulario dentro do banco
      $input = mysqli_query($conexao, "INSERT INTO tarefas (nome_evento, data_evento, hora_inicio, hora_fim, descricao_evento, local_evento, responsavel_evento) VALUES ('$nomeEvento', '$dataEvento', '$horaInicio', '$horaFim', '$descEvento', '$localEvento', '$responsavelEvento');");
      // Encerrando conexão com o banco
      mysqli_close($conexao);
    }
    // Vai para pagina principal
    echo
    "<script>
      setTimeout(function() {
        window.location.href = \"http://localhost/sistema_cadastro_tarefas_PW2/index.php\";
      }, 1000);
    </script>";
  ?>
</body>
</html>