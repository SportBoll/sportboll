<?php

include 'admin/class/quadras.class.php';

$id = $_GET['id'];

$v1 = new Quadra();
$resultado_busca = $v1->buscaID($id);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SportBoll - Detalhe Quadra</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <link href="./css/user_painel.css" rel="stylesheet">
</head>

<body>


<nav class="navbar navbar-dark bg-primary" style="border-radius: 0px">
    <a class="navbar-brand font-weight-bold" style="color: #FFFFFF;"><strong>Sistema de Reservas SportBoll</strong></a>
</nav>

<div class="text-center">
   <h2> Dados sobre a quadra selecionada</h2>
</div>



<div class="container">
    <div>
        <input class="btn btn-info" type="button" value="Voltar" onClick="history.go(-1)">
    </div>
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252" /></div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?php echo $resultado_busca[0]['NOME']; ?></h3>
                    <div class="rating">
                        <span class="review-no">Tipo: <?php echo $resultado_busca[0]['TIPO']; ?></span>
                    </div>
                    <p class="product-description"><?php echo $resultado_busca[0]['DESCRICAO']; ?></p>
                    <h4 class="price">Valor (R$/h): <span>R$ <?php echo $resultado_busca[0]['VALOR']; ?></span></h4>


                    <div class="action" style="margin-top: 35px">
                        <a href="./reservar.php?id_reservar=<?php echo $resultado_busca[0]['ID_QUADRA']; ?>" class="add-to-cart btn btn-default btn-block" type="button">QUERO RESERVAR</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

