<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "amparo");

$email = $_SESSION['email'];
$email_censurado = substr($email, 0, 3) . "****@" . explode("@", $email)[1];

$sql = "SELECT * FROM denuncias WHERE email='$email_censurado'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Minhas denúncias</title>
</head>

<body>

<h1>Minhas denúncias</h1>

<table border="1">

<tr>
<th>Tipo</th>
<th>Descrição</th>
<th>Turma</th>
<th>Data</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['tipo']."</td>";
    echo "<td>".$row['descricao']."</td>";
    echo "<td>".$row['turma']."</td>";
    echo "<td>".$row['data']."</td>";
    echo "</tr>";
}
?>

</table>

<br>

<a class="botao" href="index.html">Voltar</a>

</body>
</html>