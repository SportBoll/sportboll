<?php

include "../class_user/pessoa.class.php";

$login = $_POST['usuario'];
$senha = $_POST['senha'];

$v1 = new Pessoa();

$v1->setLogin($login);
$v1->setSenha($senha);

$v1->logaPessoa_user();

?>