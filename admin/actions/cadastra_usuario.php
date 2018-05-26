<?php

include "../class/pessoa.class.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$fone = $_POST['fone'];
$cidade = $_POST['cidade'];
$pagina = $_POST['pagina'];
$nivel = $_POST['nivel'];

$v1 = new Pessoa();

$v1->setNome($nome);
$v1->setEmail($email);
$v1->setCidade($cidade);
$v1->setTelefone($fone);
$v1->setLogin($login);
$v1->setSenha($senha);
$v1->setPagina($pagina);
$v1->setNivel($nivel);

$v1->cadastraPessoa();

?>