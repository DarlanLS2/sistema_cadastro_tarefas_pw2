<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formCadastro.css">
    <title>Document</title>
</head>
<body>
    <form action="../validacoes/validarCadastro.php" method="POST">
        <label for="nom_eve">Nome do Evento</label>
        <input id="nom_eve" name="nom_eve" type="text" required> 
   
        <label for="dt_event">Data do Evento</label>
        <input id="dt_event" name="dt_event" type="date" required> 
   
        <label for="hr_ini">Hora de Início do Evento</label>
        <input id="hr_ini" name="hr_ini" type="time" required> 
   
        <label for="hr_fim">Hora de Fim do Evento</label>
        <input id="hr_fim" name="hr_fim" type="time" required> 
 
        <label for="desc_eve">Descrição do Evento</label>
        <input id="desc_eve" name="desc_eve" type="text" required> 
   
        <label for="loc_eve">Local do Evento</label>
        <input id="loc_eve" name="loc_eve" type="text" required> 
   
        <label for="resp_eve">Responsável do Evento</label>
        <input id="resp_eve" name="resp_eve" type="text" required> 
 
        <input id="btn" type="submit" value="Enviar">
    </form>
</body>
</html>

