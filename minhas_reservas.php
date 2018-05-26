<?php
session_start();
if ((!isset ($_SESSION['login_user']) == true)) {
    unset($_SESSION['login_user']);
    header('location:login.php');
}

$logado = $_SESSION['login_user'];
$id = $_SESSION['ID_PESSOA'];

require 'admin/class/reservas.class.php';

$v1 = new Reserva();

$v1->setIdpessoa($id);
$resultado_busca = $v1->buscaTodosID();

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SportBoll - Minha Conta</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/user_painel.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" />
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

</head>


<body>


<nav class="navbar navbar-dark bg-primary" style="border-radius: 0px">
    <a class="navbar-brand font-weight-bold" style="color: #FFFFFF;"><strong>Sistema de Reservas SportBoll</strong></a>


    <a href="./login.php" class="navbar-brand font-weight-bold pull-right" style="color: #FFFFFF; cursor: pointer;">
        <i class="fa fa-close"></i> Sair</a>
    <a href="./minha_conta.php" class="navbar-brand font-weight-bold pull-right" style="color: #FFFFFF; cursor: pointer;">
        <i class="fa fa-user"></i> Minha Conta</a>
</nav>

<div class="text-center">
    <h2>Minhas Reservas</h2>
</div>



<div class="container">
<br>

    <?php if(isset($_GET['operacaoCadastro']) == 1){ ?>

    <div class="alert alert-success" role="alert">
        Reserva efetuada com sucesso!
    </div>

    <?php } ?>

    <div class="card">
        <a href="index.php" class="btn btn-success">NOVA RESERVA</a>
        <div class="container-fliud">

<br>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Data da Reserva</th>
                    <th scope="col">Hora de Inicio</th>
                    <th scope="col">Hora Final</th>
                    <th scope="col">Data do Jogo</th>
                    <th scope="col">Quadra</th>
                    <th scope="col">Ginásio</th>
                    <th scope="col">Imprimir</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i = 0; count($resultado_busca) > $i; $i++) { ?>
                <tr>
                    <td><?php echo $resultado_busca[$i]['DATA_RESERVADA'];  ?></td>
                    <td><?php echo $resultado_busca[$i]['INICIO']; ?></td>
                    <td><?php echo $resultado_busca[$i]['FIM']; ?></td>
                    <td><?php echo $resultado_busca[$i]['DATA']; ?></td>
                    <td><?php echo $resultado_busca[$i]['TIPO']; ?></td>
                    <td><?php echo $resultado_busca[$i]['NOME']; ?></td>
                    <td>

                        <a class="btn btn-info" target="_blank" href="relatorios/finaliza_reserva.php?id=<?php echo $resultado_busca[$i]['ID_RESERVA'];?>">
                            <i class="fa fa-file"></i>
                        </a>

                    </td>
                </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>

