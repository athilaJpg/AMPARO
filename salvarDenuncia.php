<?php

$tipo = $_POST['tipo'];
$descricao = $_POST['descricao'];

$conn = new mysqli("localhost", "root", "", "amparo");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$sql = "INSERT INTO denuncias (tipo, descricao, data) 
VALUES ('$tipo', '$descricao', NOW())";

if ($conn->query($sql) === TRUE) {
    echo "Denúncia enviada com sucesso.";
} else {
    echo "Erro ao enviar denúncia.";
}

$conn->close();

?>