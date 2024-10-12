<?php
/***************************************************************************************
 ************************************* EXIBIÇÃO ****************************************
 ***************************************************************************************/

  function exibirTarefas() {
    $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
    $retornoQuery = mysqli_query($conexao, "select * from tarefas");
    while ($escrever=mysqli_fetch_array($retornoQuery)) {
      echo
      '<div class="tarefa">
      <p class="infoTarefa"><b>Id: </b>'.$escrever["id"].'</p>
      <p class="infoTarefa"><b>Nome: </b>'.$escrever["nome_evento"].'</p>
      <p class="infoTarefa"><b>Data: </b>'.$escrever["data_evento"].'</p>
      <p class="infoTarefa"><b>Início: </b>'.$escrever["hora_inicio"].'</p>
      <p class="infoTarefa"><b>Fim: </b>'.$escrever["hora_fim"].'</p>
      <p class="infoTarefa"><b>Responsável: </b>'.$escrever["responsavel_evento"].'</p>
      <p class="infoTarefa"><b>Local: </b>'.$escrever["local_evento"].'</p>
      <p class="infoTarefa"><b>Descrição: </b>'.$escrever["descricao_evento"].'</p>
      </div>';
    }
    };
    
    function exibirBotaoCadastro() {
      echo
      '<div class="botaoCadastro" onclick="vaiParaCadastro()">
      <p class="iconeGrandeMais"><b>+</b></p>
      </div>';
  };
  
  function exibirTarefaPorId() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $id = $_POST["id"];
      $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
      $retornoQuery = mysqli_query($conexao, "SELECT * FROM tarefas WHERE id='$id'");
      while ($escrever=mysqli_fetch_array($retornoQuery)) {
        echo
        '<div class="tarefa">
        <p class="infoTarefa"><b>Id: </b>'.$escrever["id"].'</p>
        <p class="infoTarefa"><b>Nome: </b>'.$escrever["nome_evento"].'</p>
        <p class="infoTarefa"><b>Data: </b>'.$escrever["data_evento"].'</p>
        <p class="infoTarefa"><b>Início: </b>'.$escrever["hora_inicio"].'</p>
        <p class="infoTarefa"><b>Fim: </b>'.$escrever["hora_fim"].'</p>
        <p class="infoTarefa"><b>Responsável: </b>'.$escrever["responsavel_evento"].'</p>
        <p class="infoTarefa"><b>Local: </b>'.$escrever["local_evento"].'</p>
        <p class="infoTarefa"><b>Descrição: </b>'.$escrever["descricao_evento"].'</p>
        </div>';
        mysqli_close($conexao);
      };
    };
  };
  
  function exibirFormularioUpdate($id) {
    $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
    $retornoQuery = mysqli_query($conexao, "SELECT * FROM tarefas WHERE id='$id'");
    while ($escrever=mysqli_fetch_array($retornoQuery)) {  
      $nomeEvento = $escrever["nome_evento"];
      $dataEvento = $escrever["data_evento"];
      $horaInicio = $escrever["hora_inicio"];
      $horaFim = $escrever["hora_fim"];
      $descEvento = $escrever["descricao_evento"];
      $localEvento = $escrever["local_evento"];
      $responsavelEvento = $escrever["responsavel_evento"];
      echo 
      '<h2>Informações do Evento:</h2>
      <form action="../validacoes/validarUpdate.php" method="post">
      <label for="id">Id:</label>
      <input type="text" name="id" value="' . htmlspecialchars($id) . '" redonly/><br>
      
      <label for="nom_eve">Nome do Evento</label>
      <input id="nom_eve" name="nom_eve" type="text" value="' . htmlspecialchars($nomeEvento) . '" required><br> 
      
      <label for="dt_event">Data do Evento</label>
      <input id="dt_event" name="dt_event" type="date" value="' . htmlspecialchars($dataEvento) . '" required> <br>
      
      <label for="hr_ini">Hora de Início do Evento</label>
      <input id="hr_ini" name="hr_ini" type="time" value="' . htmlspecialchars($horaInicio) . '" required><br> 
      
      <label for="hr_fim">Hora de Fim do Evento</label>
      <input id="hr_fim" name="hr_fim" type="time" value="' . htmlspecialchars($horaFim) . '" required><br> 
      
      <label for="desc_eve">Descrição do Evento</label>
      <input id="desc_eve" name="desc_eve" type="text" value="' . htmlspecialchars($descEvento) . '" required><br>
      
      <label for="loc_eve">Local do Evento</label>
      <input id="loc_eve" name="loc_eve" type="text" value="' . htmlspecialchars($localEvento) . '" required><br> 
      
      <label for="resp_eve">Responsável do Evento</label>
      <input id="resp_eve" name="resp_eve" type="text" value="' . htmlspecialchars($responsavelEvento) . '" required><br> 
      
      <input id="btn" type="submit" value="Atualizar">
      </form>';
    };
    mysqli_close($conexao);
  };
  
  function exibirIcones() {
    echo 
      '<div class="boxIcones">
        <div class="boxIconeProcurar" onclick="vaiParaProcurar()">
          <i class="fa-solid fa-magnifying-glass iconeProcurar"></i>
        </div>
        <div class="boxIconePincel" onclick="vaiParaUpdate()">
          <i class="fa-solid fa-wrench iconeDePincel"></i>
        </div>
        <div class="boxIconeDelete" onclick="vaiParaDelete()">
          <i class="fa-solid fa-trash iconeDelete"></i>
        </div>
      </div>';
  };
  
  /**************************************************************************************************************
   *************************************************  VALIDAÇÕES ************************************************
   **************************************************************************************************************/
  
  function validarUpadate() {
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
  };
  
  function validarExclusao() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $id = $_POST["id"];
      $conexao = mysqli_connect("localhost" ,"root", "", "gerenciador");
      $input = mysqli_query($conexao, "DELETE FROM tarefas WHERE id='$id'");
      mysqli_close($conexao);
    };
  };
  
  function validarCadastro() {
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
  };

  /************************************************************************************************
   *************************************** OUTROS *************************************************
   ************************************************************************************************/

  function criarFuncoesDeRedirecionamento() {
    echo '
    <script>
      function vaiParaCadastro() {
        window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formularios/formCadastro.php";
      }
      function vaiParaUpdate() {
        window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formularios/formUpdate.php";
      }
      function vaiParaDelete() {
        window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formularios/formDelete.php";
      }
      function vaiParaProcurar() {
        window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formularios/formProcurar.php";
      }
     </script>';
  };
          
  function retornarAoInicio() {
    echo 
    "<script>
    setTimeout(function() {
      window.location.href = \"http://localhost/sistema_cadastro_tarefas_PW2/index.php\";
      }, 500);
      </script>"; 
  };

?>