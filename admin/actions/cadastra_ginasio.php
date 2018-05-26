<?php

include "../class/ginasio.class.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];
$fone = $_POST['fone'];
$cidade = $_POST['cidade'];
$pagina = $_POST['pagina'];
$documento = $_POST['documento'];
$id_prop = $_POST['id_prop'];


$v1 = new Ginasio();

$v1->setNome($nome);
$v1->setEmail($email);
$v1->setCidade($cidade);
$v1->setTelefone($fone);
$v1->setLogin($login);
$v1->setSenha($senha);
$v1->setPagina($pagina);
$v1->setDocumento($documento);

$v1->cadastraGinasio($id_prop);
?>