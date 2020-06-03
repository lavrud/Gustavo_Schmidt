<?php
/*
 * Template Name: Post Atuação/Bandeira
 * Template Post Type: post
 */
get_header(); 

if (get_the_category()[0]->term_id == 7) {
    $title = 'Projeto de Lei';
} elseif (get_the_category()[0]->term_id == 12) {
    $title = 'Bandeira';
} ?>

<!-- BANNER-FLAGS -->
<div class="bnr-tpc">
    <div class="container" style="margin-top: 77px">
        <h1 class="ttl-tpc"><?php echo $title; ?></h1>
    </div>
</div><!-- banner-hero -->

<!-- BOX-ATUAÇÃO -->
<section id="box-rounded-area">
    <div class="container">
        <div class="col-12 box-area box-area-row">

            <?php

            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content/content', 'single' );

                if ( is_singular( 'attachment' ) ) {
                    // Parent post navigation.
                    the_post_navigation(
                        array(
                            /* translators: %s: Parent post link. */
                            'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>'), '%title' ),
                        )
                    );
                } elseif ( is_singular( 'post' ) ) {
                    // Previous/next post navigation.
                    echo '<div class="post-navigation">';
                    the_post_navigation(
                        array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">Ver próxima <i class="fas fa-arrow-right"></i></span></span><br/>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true"><i class="fas fa-arrow-left"></i> Voltar à anterior</span><br/>',
                            'in_same_term' => true,
                        )
                    );
                    echo '</div>';
                }

                if (get_the_category()[0]->term_id == 12) {
                    if (!empty(get_the_tags()[0]->slug)) {
                        echo '<h2 style="font-family: Open Sans;font-style: normal;font-weight: 600;font-size: 24px;line-height: 33px;color: #F1B948;margin: 50px 0;">PROPOSIÇÕES RELACIONADAS</h2>';
                        echo do_shortcode('[vc_basic_grid post_type="custom" element_width="6" item="213" grid_id="vc_gid:1591065721537-81caa016-bb7c-4" el_class="posts-atuacao" custom_query="post_type=\'post\'&cat=7&tag=\''.get_the_tags()[0]->slug.'\'&order_by=\'date\'&order=\'DESC\'"]');
                        echo '<p style="text-align: center;"><a class="btn btn-metro shadow" href="/atuacao/" rel="noopener noreferrer" type="button">Ver Todas</a></p>';
                    }
                }

            endwhile; // End the loop.
            ?>

        </div><!-- ./box-flags -->
    </div><!-- ./container -->
</section>

<?php get_footer();