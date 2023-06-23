<?php

$conexao = mysqli_connect('localhost', 'root', '');
$banco = mysqli_select_db($conexao, 'pessoa');
mysqli_set_charset($conexao, 'utf8');

$sql = mysqli_query($conexao, "select * from tb_pessoa") or die("Erro");
while($dados = mysqli_fetch_assoc($sql))
{
    echo $dados['nome'] . PHP_EOL;
}