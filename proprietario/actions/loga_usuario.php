<?php

include "../class/pessoa.class.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$v1 = new Pessoa();

$v1->setLogin($login);
$v1->setSenha($senha);

$v1->logaPessoa();

?>