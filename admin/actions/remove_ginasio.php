<?php
include "../class/ginasio.class.php";
$id = $_GET['id'];
$v1 = new Ginasio();
$v1->removeGinasio($id);
?>