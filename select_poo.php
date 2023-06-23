<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pessoa";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "SELECT id, nome FROM tb_pessoa";
		 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {       
        printf("Id:{$row['id']}, Nome:{$row['nome']}");
    }
} else {
    printf('Nenhum registro encontrado.');
}

mysqli_free_result($result);
$conn->close();