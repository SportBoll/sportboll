<?php

include "../class/reservas.class.php";
session_start();

if ((!isset ($_SESSION['login_user']) == true)) {
    unset($_SESSION['login_user']);
    header('location:login.php');
}

$id_user = $_SESSION['ID_PESSOA'];

$data1 = $_GET['data1'];
$data2 = $_GET['data2'];
$totalH = $_GET['totalH'];
$valor = $_GET['valor'];
$idQuadra = $_GET['id_quadra'];
$_data1 = str_split($data1, 11)[1];
$_data2 = str_split($data2, 11)[1];
$dataReservar =  str_split($data1, 11)[0];
$d = new DateTime($dataReservar);
$dataReservar = $d->format('Y/m/d');
$dataReserva = date('Y/m/d');
$v1 = new Reserva();

$v1->setIdpessoa($id_user);
$v1->setIdquadra($idQuadra);
$v1->setData("'$dataReservar'");
$v1->setStatusPag('');
$v1->setStatusReserva('');
$v1->setInicio("'$_data1:00'");
$v1->setFim("'$_data2:00'");
$v1->setDatareserva("'$dataReserva'");

$v1->cadastraReserva();

?>