<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pessoa";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_errno ) {
    printf("Falha ao conectar ao banco", $conn->connect_error);
    exit();
}

if ($conn->query('DELETE FROM tb_pessoa where id = 2')) {
    printf("Excluido com sucesso!");
}

if ($conn->errno) {
    printf("Falha ao excluir.", $conn->error);
}

$conn->close();