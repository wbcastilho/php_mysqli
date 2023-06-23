<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "pessoa";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar se houve algum erro na conexão
if ($conn->connect_errno) {
    echo "Falha ao conectar-se ao MySQL: " . $conn->connect_error;
    // Você pode adicionar tratamento de erros adequado aqui
    exit();
}

// Desativar o modo de autocommit para que as transações sejam tratadas manualmente
$conn->autocommit(false);

// Início da transação
$conn->begin_transaction();

try {
    // Executar as consultas   
    $conn->query("INSERT INTO tb_pessoa (nome) VALUES ('Tommy')");
    $conn->query('UPDATE tb_pessoa set nome = "Teste2" where id = 1');      

    // Confirmar a transação
    $conn->commit();

    echo "Transação efetuda com sucesso!";
} catch (Exception $e) {
    // Em caso de erro, desfazer a transação
    $conn->rollback();
    echo "Erro na transação: " . $e->getMessage();
}

$conn->close();