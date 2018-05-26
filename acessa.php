<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'sportboll';
// Conecta-se ao banco de dados MySQL
$conexao = new mysqli($server, $user, $pass, $database);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
?>