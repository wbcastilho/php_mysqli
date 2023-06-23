<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pessoa";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
 
$sql = "INSERT INTO tb_pessoa (nome) VALUES ('Juca')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);