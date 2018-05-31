<?php
session_start();
if ((!isset ($_SESSION['login']) == true) ) {
    unset($_SESSION['login']);
    header('location:login.php');
}

$logado = $_SESSION['login'];

$id_user_logado = $_SESSION['ID_PESSOA_PROP'];
?>

    <!doctype html>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<html class="no-js lt-ie9" lang=""> <![endif]-->
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SportBoll - Administração</title>
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
        <link rel="stylesheet" href="assets/scss/style.css">
        <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                        aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand"
                   style="text-align: center; font-size: 12px; border: 0px solid">Olá, <?php echo $logado ?> </a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">MENU DE OPÇÕES</h3>
                    <li><a href="./"><i class="menu-icon fa fa-home"></i> Inicio</a></li>
                    <li><a href="reservas.php"><i class="menu-icon fa fa-shopping-cart"></i> Reservas</a></li>
                    <li><a href="quadras.php"><i class="menu-icon fa fa-futbol-o"></i> Quadras</a></li>
                    <li><a href="ginasios.php"><i class="menu-icon fa fa-futbol-o"></i> Ginásios</a></li>
                    <li><a href="../index.php"><i class="menu-icon fa fa-close"></i> Sair</a></li>
                </ul>
            </div>
        </nav>
    </aside>


    <div id="right-panel" class="right-panel">

        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                       aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </header>

        <div class="content mt-3">

<?php
?>