<?php
include "../class/pessoa.class.php";
$id = $_GET['id'];
$v1 = new Pessoa();
$v1->removePessoa($id);
?>