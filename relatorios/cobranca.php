<?php
include '../admin/class/reservas.class.php';
$v2 = new Reserva();
$id = $_GET['id'];
$v2->setIdreserva($id);
$resultado_busca_reserva = $v2->BuscaIDReserva();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>SportBoll - Relatório de Reserva</title>
</head>
<body>


<h3 style="text-align: center;">PAGUE SUA FATURA</h3><br>

<br>
<h5 style="text-align: center;">Seus dados pessoais</h5>
<br>


<table class="table table-sm">
    <thead class="bg-info">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Cidade</th>
        <th scope="col">Telefone</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $resultado_busca_reserva[0]['ID_PESSOA'];  ?></td>
        <td><?php echo $resultado_busca_reserva[0]['NOME']; ?></td>
        <td><?php echo $resultado_busca_reserva[0]['EMAIL'];  ?></td>
        <td><?php echo $resultado_busca_reserva[0]['CIDADE']; ?></td>
        <td><?php echo $resultado_busca_reserva[0]['TELEFONE']; ?></td>
    </tr>

    </tbody>
</table>
<hr>
<br>
<h5 style="text-align: center;">Dados da Reserva</h5>
<br>
<table class="table table-sm">
    <thead class="bg-info">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Data</th>
        <th scope="col">Status de Pagamento</th>
        <th scope="col">Status da Reserva</th>
        <th scope="col">Hora Inicio</th>
        <th scope="col">Hora Fim</th>
        <th scope="col">Data Reservada</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $resultado_busca_reserva[0]['ID_RESERVA'];  ?></td>
        <td><?php echo $resultado_busca_reserva[0]['DATA_RESERVADA']; ?></td>
        <td>Aguardando</td>
        <td>Aguardando</td>
        <td><?php echo $resultado_busca_reserva[0]['INICIO']; ?></td>
        <td><?php echo $resultado_busca_reserva[0]['FIM']; ?></td>
        <td><?php echo $resultado_busca_reserva[0]['DATA']; ?></td>
    </tr>

    </tbody>
</table>
<hr>
<br>
<h5 style="text-align: center;">Dados da Quadra</h5>
<br>

<table class="table table-sm">
    <thead class="bg-info">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Tipo</th>
        <th scope="col">Descrição</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $resultado_busca_reserva[0]['ID_QUADRA'];  ?></td>
        <td><?php echo $resultado_busca_reserva[0]['TIPO']; ?></td>
        <td><?php echo $resultado_busca_reserva[0]['DESCRICAO'];  ?></td>
    </tr>

    </tbody>
</table>


<br><br><br>
<div class="col-md-12" style="text-align: center;">
<strong style="font-size: 22px">Valor a pagar: R$ <?php echo $resultado_busca_reserva[0]['VALOR']; ?></strong>
</div>
<br><br><br><br><br><br>


<div class="row">
    <div class="col-md-2" style="border-top: 1px solid #000; text-align: center; margin-left: 20%;">
        <small><?php echo $resultado_busca_reserva[0]['NOME']; ?></small>
    </div>

    <div class="col-md-2" style="border-top: 1px solid #000; margin-left: 20%; text-align: center;">
        <small>Assinatura do responsável pela quadra</small>
    </div>
</div>

<br><br><br><br><br><br>



<div class="col-md-12" style="text-align: center">
<small>SPORTBOLL SISTEMA DE RESERVA</small><br>
    <small>Recibo de Pagamento - Gerado Online</small>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    window.onload = function(){
        window.print();
    }
</script>

</body>
</html>