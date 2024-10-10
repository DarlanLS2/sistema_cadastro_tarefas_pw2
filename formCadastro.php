<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="validarCadastro.php" method="POST">
    <label for="nom_eve">Nome do Evento</label>
        <input id="nom_eve" type="text" require>
   
    <label for="dt_event">Data do Evento</label>
        <input id="dt_event" type="date" require>
   
    <label for="hr_ini">Hora de Início do Evento</label>
        <input id="hr_ini" type="time" require>
   
    <label for="hr_fim">Hora de Fim do Evento</label>
        <input id="hr_fim" type="time" require>
 
    <label for="desc_eve">Descrição do Evento</label>
        <input id="desc_eve" type="text" require>
   
    <label for="loc_eve">Local do Evento</label>
        <input id="loc_eve" type="text" require>
   
    <label for="resp_eve">Responsável do Evento</label>
        <input id="resp_eve" type="text" require>
 
    <input id="btn" type="submit" value="Enviar">
 
 
    </form>
</body>
</html>
 
