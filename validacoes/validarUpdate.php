<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    include "../funcoes.php";
    echo "<center><h1>Alteração realizada!</h1></center>";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $id = $_POST["id"]; 
      $nomeEvento = $_POST["nom_eve"];
      $dataEvento = $_POST["dt_event"];
      $horaInicio = $_POST["hr_ini"];
      $horaFim = $_POST["hr_fim"];
      $descEvento = $_POST["desc_eve"];
      $localEvento = $_POST["loc_eve"];
      $responsavelEvento = $_POST["resp_eve"];

      $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
      $retornoQuery = mysqli_query($conexao, "UPDATE tarefas SET 
        nome_evento='$nomeEvento',
        data_evento='$dataEvento',
        hora_inicio='$horaInicio',
        hora_fim='$horaFim',
        descricao_evento='$descEvento',
        local_evento='$localEvento',
        responsavel_evento='$responsavelEvento'
        WHERE id='$id';");
      mysqli_close($conexao); 
    }
    retornarAoInicio();
  ?>
</body>
</html>