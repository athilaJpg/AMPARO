<?php

$conn = new mysqli("localhost", "root", "", "amparo");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM denuncias";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Painel de denúncias - AMPARO</title>
</head>

<body>

<h1>Painel de denúncias</h1>

<table border="1">

<tr>
<th>ID</th>
<th>Tipo</th>
<th>Descrição</th>
<th>Data</th>
</tr>

<?php

while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["tipo"]."</td>";
echo "<td>".$row["descricao"]."</td>";
echo "<td>".$row["data"]."</td>";
echo "</tr>";

}

?>

</table>

</body>
</html>