<?php
session_start();
session_destroy();
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style_css.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Login no Sistema</title>

<nav class="navbar navbar-dark bg-primary" style="border-radius: 0px">
    <a class="navbar-brand font-weight-bold" style="color: #FFFFFF;"><strong>Sistema de Reservas SportBoll</strong></a>
</nav>

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-wrap">
                    <h1>Login de Usuário</h1>
                    <form role="form" action="./actions_user/loga_usuario.php" method="POST" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Login</label>
                            <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Login">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Senha</label>
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-success btn-lg btn-block" value="Entrar">
                    </form>

                    <a href="./index.php" class="btn btn-custom btn-sm btn-block">VOLTAR PARA O SITE</a>

                    <?php if(isset ($_GET['error'])){
                        ?>
                    <div class="alert alert-danger" role="alert">
                        Login ou senha incorretos!
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>