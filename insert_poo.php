<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pessoa";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno ) {
    printf("Conectado com sucesso!", $conn->connect_error);
    exit();
}

if ($conn->query("INSERT INTO tb_pessoa (nome) VALUES ('Juca')")) {
    printf("Tabela atualizada com sucesso" . PHP_EOL);
}

if ($conn->errno) {
    printf("Falha ao atualizar tabela", $conn->error);
}

$conn->close();