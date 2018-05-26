<?php

include "./pessoa.class.php";

session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$fone = $_POST['fone'];
$cidade = $_POST['cidade'];
$id_pessoa = $_SESSION['ID_PESSOA'];

$v1 = new Pessoa();

$v1->setNome($nome);
$v1->setEmail($email);
$v1->setCidade($cidade);
$v1->setTelefone($fone);
$v1->setLogin($login);
$v1->setSenha($senha);
$v1->setIdPessoa($id_pessoa);

$v1->editaPessoa();

?>