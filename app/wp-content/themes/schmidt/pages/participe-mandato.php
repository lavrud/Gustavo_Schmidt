<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gustavo Schmidt</title>
    <link rel="stylesheet" href="./src/css/libs.css">
    <link rel="stylesheet" href="./src/css/styles.css">
    <script src="https://kit.fontawesome.com/90bf33c535.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- MENU -->
    <header id=#top>
        <!-- Navitagation-Bar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow">

            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="./index.html"><img src="./src/img/logo-gustavo.jpg" class="img-fluid"
                        width="180" height="60" alt=""></a>

                <!-- Button-Responsive -->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation-Responsive -->
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="./conheca-deputado.html">Conheça o Deputado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./bandeiras.html">Bandeiras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./atuacao.html">Atuação</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="./agenda.html">Agenda</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="./midia.html">Mídia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./participe-mandato.html">Participe do Mandato</a>
                        </li>
                    </ul>
                </div><!-- ./collapse -->

            </div><!-- ./container -->

        </nav><!-- ./navbar -->

    </header><!-- ./header -->




    <!-- BANNER-BOX -->
    <div class="bnr-tpc">
        <div class="content">
            <h1 class="ttl-tpc">Participe</h1>
        </div>
    </div><!-- banner-hero -->




    <!-- BOX-MÍDIA -->
    <section id="box-rounded-area">
        <div class="container">

            <div class="col-12 box-area box-area-row">

                <div class="row">


                    <!-- NEWSLETTER -->
                    <div id="newsletter" class="w-100">

                        <h4 class="text-center text-white p-3">Newsletter</h4>
                        <h2 class="text-center pb-5">Fique por dentro</h2>


                        <div class="col-lg-6 mx-auto col-sm-12">
                            <form method="POST" action="#">

                                <div class="form-group">
                                    <div>&nbsp;</div>
                                    <input type="text" class="form-control" name="inputEmail" id="inputEmail"
                                        placeholder="Insira seu e-mail:">
                                </div>

                                <div class="form-group pt-2">
                                    <div>&nbsp;</div>
                                    <input type="text" class="form-control telefone" name="inputTel" id="inputTel"
                                        onblur="mascaraDeTelefone(this)" placeholder="Insira seu nº de telefone:">
                                </div>

                                <button type="submit"
                                    class="btn btn-forms shadow d-flex mx-auto pt-2 pb-2 pl-5 pr-5"><strong>Enviar</strong></button>

                            </form><!-- ./form -->
                        </div><!-- ./form-news -->

                    </div><!-- ./newsletter -->


                </div><!-- ./row -->

            </div><!-- ./box-flags -->

        </div><!-- ./container -->
    </section>




    <!-- CONHEÇA-MINHAS-PROPOSTAS -->
    <section class="proporsal-clean">

        <div class="intro text-center mt-5 pb-3">
            <h4>atuação</h4>
            <h2>Conheça minhas propostas</h2>
        </div>

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-sm-6">
                    <div class="about-border">
                        <h5>Clipping</h5><br />
                        <div class="d-flex d-inline">
                            <p class="description">Vivamus hendrerit ac erat eget consequat nam rhoncus nisl at dapibus
                            </p>
                            <i class="fas fa-angle-right lead m-3 text-primary" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="about-border">
                        <h5>Podcasts</h5><br />
                        <div class="d-flex d-inline">
                            <p class="description">Vivamus hendrerit ac erat eget consequat nam rhoncus nisl at dapibus
                            </p>
                            <i class="fas fa-angle-right lead m-3 text-primary" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

            </div><!-- ./proporsal -->
        </div><!-- ./container -->
    </section>
    <!--./proporsal-clean -->




    <!-- NEWSLETTER -->
    <div id="newsletter">
        <div class="col-12">
            <div class="container">

                <h4 class="text-center text-white p-3">Newsletter</h4>
                <h2 class="text-center pb-5">Fique por dentro</h2>


                <div class="col-lg-6 mx-auto col-sm-12">
                    <form method="POST" action="#">

                        <div class="form-group">
                            <div>&nbsp;</div>
                            <input type="text" class="form-control" name="inputEmail" id="inputEmail"
                                placeholder="Insira seu e-mail:">
                        </div>

                        <div class="form-group pt-2">
                            <div>&nbsp;</div>
                            <input type="text" class="form-control telefone" name="inputTel" id="inputTel"
                                onblur="mascaraDeTelefone(this)" placeholder="Insira seu nº de telefone:">
                        </div>

                        <button type="submit"
                            class="btn btn-forms shadow d-flex mx-auto pt-2 pb-2 pl-5 pr-5"><strong>Enviar</strong></button>

                    </form><!-- ./form -->
                </div><!-- ./form-news -->
            </div><!-- ./container -->
        </div><!-- ./contato -->
    </div><!-- ./newsletter -->




    <!-- FOOTER -->
    <div id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-sm-6">

                    <a href="#top" class="brand-footer img-fluid">
                        <img src="./src/img/logo-footer.jpg" alt="">
                    </a>

                </div>

                <div class="col-lg-4 col-sm-6">

                    <div class="address-footer">
                        <span>TELEFONE</span><br />
                        <small>21</small>&nbsp;<span><strong>2588.1284 | 97004.3544</strong></span>
                        <div>&nbsp;</div>
                        <span>ENDEREÇO</span>
                        <p>palácio 23 de julho, s/nº Gab, 107, praça XV.
                            Centro, Rio de janeiro/RJ CEP 20.010-090
                        </p>
                    </div>

                </div><!-- ./col-lg-4 -->

                <div class="col-lg-4 col-sm-12">

                    <div class="social-media">

                        <div class="content d-flex justify-content-center">

                            <a href="http://" target="_blank" class="fa fa-instagram"></a>
                            <a href="http://" target="_blank" class="fa fa-facebook"></a>
                            <a href="http://" target="_blank" class="fa fa-twitter"></a>
                            <a href="http://" target="_blank" class="fa fa-youtube"></a>

                        </div><!-- ./content -->
                    </div><!-- ./social-media -->

                </div><!-- ./col-lg-4 -->
            </div><!-- ./row -->
        </div><!-- ./container-fluid -->

        <div class="copyright display-5 ">
            2020 |&nbsp;Todos direitos reservados - CACO Produtora Digital
        </div>
    </div><!-- ./footer -->

    <!-- bootstrap -->
    <script src="./src/js/libs/jquery.slim.min.js"></script>
    <script src="./src/js/libs/bootstrap.bundle.min.js"></script>
    <script src="./src/js/libs/bootstrap.min.js"></script>
    <!-- custom-js -->
    <script src="./src/js/scripts.js"></script>
</body>

</html>