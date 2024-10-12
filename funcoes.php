<?php
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
  }

  function criarFuncoesDeRedirecionamento() {
    echo '
      <script>
        function vaiParaCadastro() {
          window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formCadastro.php";
        }
        function vaiParaUpdate() {
          window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formUpdate.php";
        }
        function vaiParaDelete() {
          window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formDelete.php";
        }
        function vaiParaProcurar() {
          window.location.href = "http://localhost/sistema_cadastro_tarefas_PW2/formProcurar.php";
        }
      </script>';
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
  } 

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
  }

  function retornarAoInicio() {
    echo 
      "<script>
        setTimeout(function() {
          window.location.href = \"http://localhost/sistema_cadastro_tarefas_PW2/index.php\";
        }, 1000);
      </script>"; 
  }
?>