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
    echo "Denúncia enviada com sucesso.";
} else {
    echo "Erro ao enviar denúncia.";
}

$conn->close();

?>