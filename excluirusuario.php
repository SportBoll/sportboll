<?php
session_start();
?>

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

        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

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

<li class="selected"><a href="#0"><div class="image-icon"><img src="img/excluir-icon.png"></div><h6>
				Excluindo</h6></a></li>
               	       </ul>
            </nav> 
          </div> <!-- Fim Menu -->

          <ul class="cd-hero-slider">

            <li class="selected">
              <div class="heading"><!-- Tela Principal -->
                
<h1>Excluindo Conta...</h1>
              </div>
              <div class="cd-full-width first-slide">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="content first-content">
                        
                        
                        
    
<?php
include ("usuario.class.php");
            $idusuario = $_SESSION["idusuario"];
            
            $usuario = new usuario("");
            $usuario ->excluirDados($idusuario);
           
        ?>
        
        <form action="" method="post">
            <input type="hidden" name="excluir" id="idusuario" value="<?php echo $idusuario; ?>"/>
            </form>
            <form action="index.php" method="post">
            <input type="submit" name="voltar" style="display: inline-block; background-color: #ffbb05; color: #343434; font-size: 13px; padding: 12px 18px;border-radius: 3px; text-decoration: none; border: 1px solid transparent; " value="voltar">
</form>
		


		
		
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </li>
</section>
<footer>
	<p>Copyright © 2017 |
	<a href="https://www.facebook.com/daniel.breda.9" target="_blank"><em>Daniel 
	Maikel Breda |</em></a>
	<a href="ajuda.php" target="_parent"><em>Precisa 
	de Ajuda? Clique Aqui!</em></a> </p>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

    </body>
</html>

<![endif]-->