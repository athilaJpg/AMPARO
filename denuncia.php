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

<form action="salvar_denuncia.php" method="POST">

<label>Tipo de violência:</label>
<br>

<select name="tipo">
<option>Bullying/Cyberbullying</option>
<option>Racismo</option>
<option>Assédio</option>
<option>Discriminação</option>
<option>Agressão</option>
</select>

<br><br>

<label>Descreva com suas palavras o ocorrido:</label>
<br>

<textarea name="descricao" rows="6" cols="50"></textarea>

<br><br>

<button type="submit">Enviar esta denúncia</button>

</form>

</body>
</html>