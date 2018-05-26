<?php
session_start();
if ((!isset ($_SESSION['login_user']) == true)) {
    unset($_SESSION['login_user']);
    header('location:login.php');
}

$logado = $_SESSION['login_user'];
$id = $_SESSION['ID_PESSOA'];

require 'class_user/pessoa.class.php';

$v7 = new Pessoa();
$v7->setIdPessoa($id);
$resultado_busca = $v7->buscaPessoaID();

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
    <h2>Alterar Dados</h2>
</div>



<div class="container">
    <br>

    <?php if(isset($_GET['operacaoCadastro']) == 1){ ?>

        <div class="alert alert-success" role="alert">
            Dados salvos com sucesso!
        </div>

    <?php } ?>


    <a href="minhas_reservas.php" class="btn btn-info">VOLTAR PARA RESERVAS</a>

    <div class="card">

        <form method="post" action="class_user/altera_usuario.php">
            <div class="row">
                <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                <input type="hidden" name="id" id="id" class="form-control" value="painel">
                <div class="col-md-6">
                    <label for="inputIsValid" class=" form-control-label">Nome completo</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"
                           required value="<?php echo $resultado_busca[0]['NOME'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputIsValid" class=" form-control-label">Seu e-mail</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                           required value="<?php echo $resultado_busca[0]['EMAIL'] ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                <div class="col-md-6">
                    <label for="inputIsValid" class=" form-control-label">Número de telefone</label>
                    <input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone"
                           required value="<?php echo $resultado_busca[0]['TELEFONE'] ?>">
                </div>
                <div class="col-md-6">
                    <label for="inputIsValid" class=" form-control-label">Cidade onde reside</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade"
                           required value="<?php echo $resultado_busca[0]['CIDADE'] ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="inputIsValid" class=" form-control-label">Nome de usuário</label>
                    <input type="text" name="login" id="login" class="form-control" placeholder="Usuário"
                           required value="<?php echo $resultado_busca[0]['LOGIN'] ?>">
                </div>
                <div class="col-md-4">
                    <label for="inputIsValid" class=" form-control-label">Escolha uma senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                           required value="<?php echo $resultado_busca[0]['SENHA'] ?>">
                </div>

            </div>
            <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px">
                <i class="fa fa-plus"></i> Alterar
            </button>
            <div class="container"></div>
        </form>


    </div>

</body>
</html>

