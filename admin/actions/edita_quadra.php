<?php

include "../class/quadras.class.php";

$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$horario = $_POST['horario'];
$id_ginasio = $_POST['id_ginasio'];
$id_quadra = $_POST['id_quadra'];

$v1 = new Quadra();

$v1->setDescricao($descricao);
$v1->setTipo($tipo);
$v1->setHorario($horario);
$v1->setIdGinasio($id_ginasio);
$v1->setIdQuadra($id_quadra);

$v1->editarQuadra();

?>