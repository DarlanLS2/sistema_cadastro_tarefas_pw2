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
      // Recebendo os valores dos inputs diretamente
      $nomeEvento = $_POST['nom_eve'];
      $dataEvento = $_POST['dt_event'];
      $horaInicio = $_POST['hr_ini'];
      $horaFim = $_POST['hr_fim'];
      $descEvento = $_POST['desc_eve'];
      $localEvento = $_POST['loc_eve'];
      $responsavelEvento = $_POST['resp_eve'];
    }
  ?>
</body>
</html>