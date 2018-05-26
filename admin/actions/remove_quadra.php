<?php
include "../class/quadras.class.php";
$id = $_GET['id'];
$v1 = new Quadra();
$v1->removeQuadra($id);
?>