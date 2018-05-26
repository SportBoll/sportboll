<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
        <title>SportBoll</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"><!--Acentuação-->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><!--Acentuação-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

<!--TIRAR-->   <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>

        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
          
          </video>
        </section>
        
        <section class="cd-hero">

          <div class="cd-slider-nav"><!-- Inicio Menu -->
            <nav>
              <span class="cd-marker item-1"></span>
              <ul>

<li class="selected"><a href="#0"><div class="image-icon"><img src="img/home-icon.png"></div><h6>Ginasio Titi</h6></a></li>
<li><a href="loginusuario.php"><div class="image-icon"><img src="img/proprietario-icon.png"></div><h6>Voltar</h6></a></li>


               	       </ul>
            </nav> 
          </div> <!-- Fim Menu -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading"><!-- Tela Principal -->
                
<h1>Olá <!--<?php echo$nomedocaraquefezlogin;?>--> Seja bem vindo ao SportBoll!</h1>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        
<h1>Excluindo conta!</h1>
    <?php
        $id = $_GET['id'];
        if (isset($_POST["excluir"])){
            include "usuario.class.php";
            $usuario = new usuario();
            $usuario->excluirusuario($id);
            } else {
        ?>
       
        <form action="" method="post">
            Você tem certeza que quer excluir sua conta?
            <input type="submit" name="excluir" value="Sim, Excluir"/> <br/>
<br></br>
            Clique aqui para não exluir e voltar!
            <?php } ?>
              <input type="button" value="Voltar" onclick="  location.href='loginusuario.php';" /> 
            </a>
        </form>

                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>

    </body>
</html>