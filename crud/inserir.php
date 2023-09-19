<?php
include "../inc/conexao.php";

$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "insert into cadastro(nome, senha) values('$nome', '$senha')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../cadastrados.php");

?>