<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?>&nbsp;|&nbsp;<?php bloginfo( 'description' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/libs.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <script src="https://kit.fontawesome.com/90bf33c535.js" crossorigin="anonymous"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- MENU -->
    <header id=#top>
        <!-- Navitagation-Bar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow">

            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="./index.html"><img src="<?php bloginfo( 'template_url' ); ?>/img/logo-gustavo.jpg" class="img-fluid"
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
                        <li class="nav-item">
                            <a class="nav-link" href="./agenda.html">Agenda</a>
                        </li>
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