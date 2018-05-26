<?php
$operacao = 0;

session_start();
session_destroy();

?>

<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - SportBoll</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">


<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="login.php">
                    <img class="align-content" src="images/bola-logo.png" height="130px" style="margin-left: -50px"
                         alt="">
                    <img class="align-content" src="images/logo.png" style="margin-top: 35px" alt="">
                </a>
            </div>
            <div class="login-form">

                <h2 class="text-center" style="margin-bottom: 30px">Login do usuário</h2>

                <form method="post" action="actions/loga_usuario.php">
                    <div class="form-group">
                        <input type="text" id="login" name="login" class="form-control" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
                    </div>
                    <div class="checkbox">

                    </div>
                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Entrar</button>

                </form>
            </div>
        </div>
    </div>
</div>

<!--MODAIS-->
<div class="modal fade" id="resultadoCadastroSucesso" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="mediumModalLabel">Sucesso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <a><strong> Cadastro realizado com sucesso! </strong></a>
                <p>Agora você pode fazer login no sistema!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="resultadoCadastroErro" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
     style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="mediumModalLabel">Erro!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <a><strong> Erro ao realizar o cadastro! </strong></a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- FIM MODAIS -->
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>

<?php

if (isset($_GET['operacaoCadastro'])) {
    $operacao = $_GET['operacaoCadastro'];
    if ($_GET['operacaoCadastro'] == 1) {
        ?>
        <script type="application/javascript">
            (function ($) {
                $("#resultadoCadastroSucesso").modal("show");
            })(jQuery);
        </script>
        <?php
    } else {
        ?>
        <script type="application/javascript">
            (function ($) {
                $("#resultadoCadastroErro").modal("show");
            })(jQuery);
        </script>
    <?php }
} else {
    $operacao = "";
}
?>

