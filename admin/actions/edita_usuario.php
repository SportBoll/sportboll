<?php

include "../class/pessoa.class.php";

$id_pessoa = $_POST['id_pessoa'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$fone = $_POST['fone'];
$cidade = $_POST['cidade'];
$pagina = $_POST['pagina'];

$v1 = new Pessoa();

$v1->setNome($nome);
$v1->setEmail($email);
$v1->setCidade($cidade);
$v1->setTelefone($fone);
$v1->setPagina($pagina);
$v1->setIdPessoa($id_pessoa);

$v1->editaPessoa();

?>