<?php

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$id = $_GET['id_reservar'];

include 'admin/class/quadras.class.php';
$id = $_GET['id_reservar'];
$v1 = new Quadra();
$d = [];
$d = $v1->verificaDisponibilidadeHorario($id, $data1, $data2);
$resultado_busca = $v1->buscaID($id);

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SportBoll - Detalhe Quadra</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


</head>

<style>
    body {
        font-family: 'open sans';
        overflow-x: hidden; }

    img {
        max-width: 100%; }

    .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }
    @media screen and (max-width: 996px) {
        .preview {
            margin-bottom: 20px; } }

    .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
    .preview-thumbnail.nav-tabs li {
        width: 18%;
        margin-right: 2.5%; }
    .preview-thumbnail.nav-tabs li img {
        max-width: 100%;
        display: block; }
    .preview-thumbnail.nav-tabs li a {
        padding: 0;
        margin: 0; }
    .preview-thumbnail.nav-tabs li:last-of-type {
        margin-right: 0; }

    .tab-content {
        overflow: hidden; }
    .tab-content img {
        width: 100%;
        -webkit-animation-name: opacity;
        animation-name: opacity;
        -webkit-animation-duration: .3s;
        animation-duration: .3s; }

    .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

    @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

    .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column; }

    .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }

    .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

    .checked, .price span {
        color: #ff9f1a; }

    .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

    .product-title {
        margin-top: 0; }

    .size {
        margin-right: 10px; }
    .size:first-of-type {
        margin-left: 40px; }

    .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
    .color:first-of-type {
        margin-left: 20px; }

    .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
        transition: background .3s ease; }
    .add-to-cart:hover, .like:hover {
        background: #b36800;
        color: #fff; }

    .not-available {
        text-align: center;
        line-height: 2em; }
    .not-available:before {
        font-family: fontawesome;
        content: "\f00d";
        color: #fff; }

    .orange {
        background: #ff9f1a; }

    .green {
        background: #85ad00; }

    .blue {
        background: #0076ad; }

    .tooltip-inner {
        padding: 1.3em; }

    @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
            transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }

    /*# sourceMappingURL=style.css.map */
</style>

<body>


<nav class="navbar navbar-dark bg-primary" style="border-radius: 0px">
    <a class="navbar-brand font-weight-bold" style="color: #FFFFFF;"><strong>Sistema de Reservas SportBoll</strong></a>
</nav>

<div class="container">


    <div>
        <input class="btn btn-info" type="button" value="Voltar" onClick="history.go(-1)">
    </div>

    <?php

    if(count($d) !== 0){
        ?>
        <br>
        <div class="alert alert-danger" role="alert">
            Horário indisponível. Tente novamente...
        </div>

        <?php
        } else {

        $_data1 = str_split($data1, 11)[1];
        $_data2 = str_split($data2, 11)[1];


        $entrada = $_data1;
        $saida = $_data2;
        $hora1 = explode(":",$entrada);
        $hora2 = explode(":",$saida);
        $acumulador1 = ($hora1[0] * 3600) + ($hora1[1] * 60);
        $acumulador2 = ($hora2[0] * 3600) + ($hora2[1] * 60);
        $resultado = $acumulador2 - $acumulador1;
        $hora_ponto = floor($resultado / 3600);
        $resultado = $resultado - ($hora_ponto * 3600);
        $min_ponto = floor($resultado / 60);
        $resultado = $resultado - ($min_ponto * 60);
        $secs_ponto = $resultado;

        $tempo = $hora_ponto;
        $total_horas = $tempo;


        $valorT = $resultado_busca[0]['VALOR'] * $total_horas;

        ?>

        <div class="container">
            <div class="row">
                <div class="text-center">
                <h2>Dados da Reserva</h2>
                </div>

                <div class="card">
                    <div class="container-fliud">

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Quadra</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Valor/h</th>
                                <th scope="col">Inicio</th>
                                <th scope="col">Fim</th>
                                <th scope="col">Total de Horas</th>
                                <th scope="col">Valor a Pagar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo $resultado_busca[0]['NOME'];  ?></td>
                                <td><?php echo $resultado_busca[0]['TIPO']; ?></td>
                                <td>R$ <?php echo $resultado_busca[0]['VALOR']; ?></td>
                                <td><?php echo $data1 ?></td>
                                <td><?php echo $data2 ?></td>
                                <td><?php echo $total_horas ?></td>
                                <td>R$ <?php echo $valorT ?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>
                <div class="text-center">
                    <a type="submit" href="./admin/actions/faz_reserva.php/?id_quadra=<?php echo $id ?>&data1=<?php echo $data1 ?>&data2=<?php echo $data2 ?>&totalH=<?php echo $total_horas ?>&valor=<?php echo $valorT ?>" class="btn btn-warning btn-block">CONCLUIR RESERVA </a>
                </div>

            </div>
        </div>


        <?php }?>


</div>
</body>
</html>


