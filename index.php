<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">

<![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="">

<![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="">

<![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="">

<!--<![endif]-->

<head>
    <title>SportBoll</title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <!--Acentuação-->
    <meta charset="utf-8" />
    <meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
    <!--Acentuação-->
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/fontAwesome.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script type="text/javascript" src="verificacpf.js"></script>
    <!-- Verifica cpf -->
    <script type="text/javascript" src="verificacnpj.js"></script>
    <!-- Verifica cnpj -->

    <script>
        <!-- Script faz conversão da mascara nos textbox -->
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i)

            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }

        }
    </script>

</head>

<body>

<div class="overlay">
</div>
<section class="top-part">
    <video autoplay="" controls="" loop="">
        <source src="videos/video.mp4" type="video/mp4">
        <!-- Video fica rodando em 8 segundos fazendo loop iniciando novamente -->
    </video>
</section>
<section class="cd-hero">
    <div class="cd-slider-nav">
        <!-- Inicio Menu -->
        <nav>
            <span class="cd-marker item-1"></span>
            <ul>
                <li class="selected">
                    <a href="#0">
                        <!-- Selected inicia, sendo principal função da pg -->
                        <div class="image-icon">
                            <img src="img/inicio-icon.png"></div>
                        <h6>Home</h6>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <div class="image-icon">
                            <img src="img/login-icon.png"></div>
                        <h6>Login</h6>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <div class="image-icon">
                            <img src="img/proprietario-icon1.png"></div>
                        <h6>Cadastro</h6>
                    </a>
                </li>
                <!--				<li><a href="#0">-->
                <!--				<div class="image-icon">-->
                <!--					<img src="img/usuario-icon.png"></div>-->
                <!--				<h6>Usuário</h6>-->
                <!--				</a></li>-->
                <li>
                    <a href="#0">
                        <div class="image-icon">
                            <img src="img/imagen-icon.png"></div>
                        <h6>Quadras</h6>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <div class="image-icon">
                            <img src="img/contato-icon.png"></div>
                        <h6>Contato</h6>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Fim Menu -->
    <ul class="cd-hero-slider">
        <!-- exibição de slide (video) -->
        <li class="selected">
            <div class="heading">
                <!-- Tela Principal -->
                <h1>SportBoll</h1>
                <span>Seja Bem vindo!</span> </div>
            <div class="cd-full-width first-slide">
                <!-- Numero qual icone é e pg  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content first-content">
                                <p>A prática de esportes para saúde e bem estar são vários. Principalmente quando se fala em futebol. Esporte que fortalece muito as articulações desenvolve a coordenação motora e o trabalho em equipe. Podendo ser praticado por homens, mulheres e crianças.O site busca melhor controle e acessibilidade para prática do esporte de modo confiável, rápido e eficaz. O objetivo principal deste site é buscar a praticidade e a comodidade de marcar jogos a qualquer hora do dia, verificando a disponibilidade de horários e locais para se jogar futebol. O SportBoll, busca a solução para acabar de vez com as desculpas de “não ter tempo para pesquisar locais apropriados” ou “ ter que ligar para o proprietário da quadra e esperar ele consultar a agenda dele”, entre outras desculpas e atrasos.</p>
                                <div class="primary-button">
                                    <!-- Botão volta ao menu -->
                                    <a href="#">Clique aqui para voltar ao menu superior</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="heading">
                <h1>Usuário</h1>
                <!-- Cadastro Usuario -->
                <span>Convide seus
										amigos venha reservar horários com o SportBoll</span>
            </div>
            <div class="cd-half-width third-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content third-content">
                                <div class="row">
                                    <div class="left-feature-text">
                                    </div>
                                    <div class="left-feature-text">
                                    </div>
                                    <br>
                                    <h1>Selecione o Módulo desejado</h1>
                                    <br>
                                    <br>
                                    <br>
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <a type="button" href="./login.php" class="btn btn-warning btn-block btn-lg" style="border-radius: 0px; background: rgb(255, 187, 5); border: 0px;color: #000;">CLIENTES</a>
                                        </div>

                                        <div class="col-md-6">
                                            <a type="button" href="./admin/login.php" class="btn btn-info btn-block btn-lg" style="border-radius: 0px; background: rgb(255, 187, 5) ; border: 0px; color: #000;">PROPRIETÁRIOS</a>
                                        </div>
                                    </div>

        <li>
            <div class="heading">
                <h1>Cadastre-se</h1>
                <!-- Cadastro Proprietario --><span>"Cadastre-se e desfrute ao máximo do nosso sistema de reservas"</span>
            </div>
            <div class="cd-half-width third-slide">
                <!-- Numero qual icone é e pg  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content third-content">
                                <div class="row">
                                    <div class="left-proprietario-text">
                                        <h4>Cadastro</h4>
                                        <!-- Cadastro Proprietario -->
                                        <p>Preencha os seus dados e cadastre-se no sistema!</p>
                                        <form action="admin/actions/cadastra_usuario.php" method="post">
                                            <div class="row">
                                                <input type="hidden" name="pagina" id="pagina" class="form-control" value="login">
                                                <input type="hidden" name="id" id="id" class="form-control" value="painel">
                                                <div class="col-md-6">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Nome completo</label>
                                                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Seu e-mail</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                                                <div class="col-md-6">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Número de telefone</label>
                                                    <input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Cidade onde reside</label>
                                                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Escolha um nome de usuário</label>
                                                    <input type="text" name="login" id="login" class="form-control" placeholder="Usuário" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Escolha uma senha</label>
                                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="inputIsValid" class="pull-left form-control-label">Escolha o tipo de cadastro</label>
                                                    <select class="form-control" id="nivel" name="nivel">
                                                        <option value="1">Sou usuário, quero reservar.</option>
                                                        <option value="3">Sou proprietario, quero alugar.</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-lg pull-right" style="border-radius: 0px; background: rgb(255, 187, 5) ; border: 0px; color: #000; margin-top: 15px">
                                                <i class="fa fa-plus"></i> Salvar
                                            </button>
                                        </form>

        <li>
            <div class="heading">
                <h1>Quadras disponíveis</h1>
                <!-- Tela de Imagens Quadras --><span>Imagens
										de quadras disponíveis para Prática do Esporte</span>
            </div>
            <div class="cd-half-width fourth-slide">
                <!-- Numero qual icone é e pg  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content fourth-content">
                                <div class="row">

                                    <?php
                                    include 'admin/class/quadras.class.php';
                                    include 'admin/class/ginasio.class.php';
                                    $v2 = new Ginasio();
                                    $resultado_busca_ginasio = $v2->buscaTodos();
                                    $v1 = new Quadra();
                                    $resultado_busca = $v1->buscaTodos();

                                    for($i = 0; $i <  count($resultado_busca); $i++){
                                        ?>

                                        <div class="col-sm-4">
                                            <div class="card" style="width: 35rem; border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 3px; padding: 5px">
                                                <img class="card-img-top" src="http://www.land2build.com/en/wp-content/uploads/2012/04/H.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $resultado_busca[$i]['NOME']; ?></h5>
                                                    <p class="card-text">
                                                        <?php echo $resultado_busca[$i]['DESCRICAO']; ?>
                                                    </p>
                                                    <p class="card-text text-primary">R$
                                                        <?php echo $resultado_busca[$i]['VALOR']; ?> /h</p>
                                                    <a href="detalhe_quadra.php?id=<?php echo $resultado_busca[$i]['ID_QUADRA']; ?>" class="btn btn-primary">VER DETALHES</a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="heading">
                <h1>Dúvidas?</h1>
                <!-- Tela de Contato --><span>Deixe uma
										mensagem faremos o possí­vel para te responder
										o quanto antes!</span> </div>
            <div class="cd-half-width fivth-slide">
                <!-- Numero qual icone é e pg  -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="content fivth-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="left-info">
                                            <p>Telefones: (54)9 9154-5634 ou (54)3613-3274
                                                <br>
                                                <br><em>
                                                    R. Pedro Alvares
                                                    Cabral 369<br>
                                                    Campinas do
                                                    sul - RS</em>
                                            </p>
                                            <ul class="social-icons">
                                                <i>
                                                    <a href="https://www.facebook.com/daniel.breda.9" target="_blank">
                                                        <i class="fa fa-facebook">
                                                        </i></a>
                                                </i><i>
                                                    <a href="https://twitter.com/_danimaikel" target="_blank">
                                                        <i class="fa fa-twitter">
                                                        </i></a>
                                                </i>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <form id="contact" action="envia_email.php" method="post">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <input id="nome" class="form-control" name="nome" placeholder="Nome" required="" type="text">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <input id="email" class="form-control" name="email" placeholder="Email" required="" type="email">
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                    <fieldset>
                                                        <textarea id="msg" class="form-control" name="msg" placeholder="Mensagem" required="" rows="6"></textarea>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-12">
                                                    <fieldset>
                                                        <button id="form-submit" class="btn" type="submit">
                                                            Enviar Mensagem
                                                        </button>
                                                    </fieldset>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<footer>
    <p>Copyright © 2018 |
        <a href="https://www.facebook.com/daniel.breda.9" target="_blank"><em>Daniel
                Maikel Breda |</em></a>
        <a href="ajuda.php" target="_blank"><em>Precisa
                de Ajuda? Clique Aqui!</em></a> </p>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>
<![endif]-->