<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Creative - Start Bootstrap Theme</title>

        <!-- Bootstrap core CSS --> 
        <link href="http://localhost:8888/IntercambioFacil/application/views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="http://localhost:8888/IntercambioFacil/application/views/views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="http://localhost:8888/IntercambioFacil/application/views/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="http://localhost:8888/IntercambioFacil/application/views/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="http://localhost:8888/IntercambioFacil/application/views/css/creative.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Home</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#services">Serviço</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h1 class="text-uppercase">
                            <strong>Intercâmbio Fácil</strong>
                        </h1>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5">Intercâmbio Fácil um  sistema onde você emcomtre as melhores universidade para fazer o seu intercâmbio</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Descubre mais +</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">Nós temos o que você precisa!</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4">
                            Intercâmbio Fácil tem tudo para que você encontra uma universidade em pouco tempo! Todos os modelos de universidade inscriçao totalmente, gratuitos fáceis de usar.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Iniciar!</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">
                            A seu serviço</h2>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Inscrição do Aluno</h3>
                            <p class="text-muted mb-0"> <a href="http://localhost:8888/IntercambioFacil/cadastroaluno">Aluno</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Universidade</h3>
                            <p class="text-muted mb-0"><a href="http://localhost:8888/IntercambioFacil/cadastroauniversidadepage">Universidade</a></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Entrar</h3>
                            <p class="text-muted mb-0"><a href="http://localhost:8888/IntercambioFacil/Login_Aluno">Aluno</a>/<a href="http://localhost:8888/IntercambioFacil/loginuniversidade">Universidade</a></p>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                            <h3 class="mb-3">Universidade</h3>
                            <p class="text-muted mb-0">Universidade + curtidas</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0" id="portfolio" style="display: flex">
            <div class="container">           
                <div class="row">
                    <?php foreach ($dados as $dado) { ?>

                        <div class="col-lg-4 col-sm-4" style="margin-bottom: 15px">
                            <a class="portfolio-box" href="#">
                                <img class="img-fluid" src="http://localhost:8888/IntercambioFacil/application/views/img/portfolio/thumbnails/Intercâmbio.jpg" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="">
                                            <!--                                            nome_universidade,celular,email-->
                                            <?php echo $dado['email'] . "<br>" ?>
                                            <?php echo $dado['celular'] . "<br>"; ?>
                                        </div>
                                        <div class="project-name">
                                            <?php echo $dado['nome_universidade']; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </section>


        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">
                            Vamos entrar em contato!</h2>
                        <hr class="my-4">
                        <p class="mb-5">
                            Pronto para começar seu intercâmbio conosco? Isso é ótimo! Ligue para nós ou envie-nos um e-mail e entraremos em contato o mais breve possível!  </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center">
                        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                        <p>(48)9-966-844-18</p>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="mailto:your-email@your-domain.com">intercambio_facil@intercambio.com.br</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>

    </body>

</html>
