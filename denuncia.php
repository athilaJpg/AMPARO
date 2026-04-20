<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>AMPARO - Registrar denúncia</title>
</head>

<body>

<h1>Registrar denúncia</h1>

<form action="http://localhost/amparo/salvarDenuncia.php" method="POST">

<label>Qual tipo de violencia você sofreu?</label>
<br>

<select name="tipo" required>
<option value="Bullying/Cyberbullying">Bullying/Cyberbullying</option>
<option value="Racismo">Racismo</option>
<option value="Assédio">Assédio</option>
<option value="Discriminação">Discriminação</option>
<option value="Agressão">Agressão</option>
</select>

<br><br>

<label>Descreva com suas palavras o ocorrido:</label>
<br>

<textarea name="descricao" rows="6" cols="50" required></textarea>

<label>Turma do agressor:</label>

<select name="turma" required>

<option value="">Selecione a turma</option>

<optgroup label="Técnico em Eletrônica">
<option>Técnico em Eletrônica - 1º Ano</option>
<option>Técnico em Eletrônica - 2º Ano</option>
<option>Técnico em Eletrônica - 3º Ano</option>
</optgroup>

<optgroup label="Técnico em Informática">
<option>Técnico em Informática - 1º Ano</option>
<option>Técnico em Informática - 2º Ano</option>
<option>Técnico em Informática - 3º Ano</option>
</optgroup>

<optgroup label="Técnico em Informática Conc/Sub">
<option>Técnico em Informática Conc/Sub - 1º Semestre</option>
<option>Técnico em Informática Conc/Sub - 2º Semestre</option>
<option>Técnico em Informática Conc/Sub - 3º Semestre</option>
</optgroup>

<optgroup label="Técnico em Eletroeletrônica Conc/Sub">
<option>Técnico em Eletroeletrônica Conc/Sub - 1º Semestre</option>
<option>Técnico em Eletroeletrônica Conc/Sub - 2º Semestre</option>
<option>Técnico em Eletroeletrônica Conc/Sub - 3º Semestre</option>
</optgroup>

<optgroup label="PROEJA Telecomunicações">
<option>PROEJA Telecomunicações - 1º Ano</option>
<option>PROEJA Telecomunicações - 2º Ano</option>
<option>PROEJA Telecomunicações - 3º Ano</option>
</optgroup>

<optgroup label="Licenciatura em Química">
<option>Licenciatura em Química - 1º Semestre</option>
<option>Licenciatura em Química - 3º Semestre</option>
<option>Licenciatura em Química - 5º Semestre</option>
<option>Licenciatura em Química - 7º Semestre</option>
</optgroup>

<optgroup label="TADS">
<option>TADS - 1º Semestre</option>
<option>TADS - 2º Semestre</option>
<option>TADS - 3º Semestre</option>
<option>TADS - 4º Semestre</option>
<option>TADS - 5º Semestre</option>
<option>TADS - 6º Semestre</option>
</optgroup>

<optgroup label="Engenharia Elétrica">
<option>Engenharia Elétrica - 1º Semestre</option>
<option>Engenharia Elétrica - 3º Semestre</option>
<option>Engenharia Elétrica - 5º Semestre</option>
<option>Engenharia Elétrica - 7º Semestre</option>
<option>Engenharia Elétrica - 9º Semestre</option>
</optgroup>

<optgroup label="Especialização">
<option>Especialização em Docência na E.B. - 1º Semestre</option>
<option>Especialização em Docência na E.B. - 3º Semestre</option>
</optgroup>

</select>

<br><br>

<button type="submit" onclick="return confirmarEnvio()">Enviar esta denúncia</button>

</form>

<script src="javascript.js"></script>

</body>
</html>