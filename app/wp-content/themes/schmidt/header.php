<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?>&nbsp;|&nbsp;<?php bloginfo( 'description' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/libs.css">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/90bf33c535.js" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?>>
    <!-- MENU -->
    <header id=#top>
        <!-- Navitagation-Bar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow">

            <div class="container">

                <!-- Logo -->
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo( 'template_url' ); ?>/img/logo-gustavo.jpg" class="img-fluid" width="180"
                        height="60" alt="">
                </a>

                <!-- Button-Responsive -->
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation-Responsive -->
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'navbar_menu',
                                'depth'             => 2,
                                'container'         => 'ul',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        ?>
                    </ul>
                </div><!-- ./collapse -->

            </div><!-- ./container -->

        </nav><!-- ./navbar -->

    </header><!-- ./header -->