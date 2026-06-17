<?php
session_start(); 
$email = $_SESSION['email']; //aqui pega o email
//aqui censura o email
$email_censurado = substr($email, 0, 3) . "****@" . explode("@", $email)[1];

$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];
$turma = $_POST['turma'];

$conn = new mysqli("localhost", "root", "", "amparo");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO denuncias (tipo, descricao, data, turma, email) 
VALUES ('$tipo', '$descricao', NOW(), '$turma', '$email_censurado')";

if ($conn->query($sql) === TRUE) {
    echo "<!DOCTYPE html>\n";
    echo "<html>\n";
    echo "<head>\n";
    echo "<meta charset=\"UTF-8\">\n";
    echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
    echo "<link rel=\"stylesheet\" href=\"style.css\">\n";
    echo "<title>Denúncia enviada</title>\n";
    echo "</head>\n";
    echo "<body>\n";
    echo "<div class=\"container\">\n";
    echo "<h1>Denúncia enviada com sucesso.</h1>\n";
    echo "<p>Sua denúncia foi registrada com sucesso.</p>\n";
    echo "<button class=\"botao\" onclick=\"window.location.href='index.html'\">Voltar para início</button>\n";
    echo "</div>\n";
    echo "</body>\n";
    echo "</html>\n";
} else {
    echo "Erro ao enviar denúncia.";
}

$conn->close();

?>