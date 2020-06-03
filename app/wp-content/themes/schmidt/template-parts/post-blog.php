<?php
/*
 * Template Name: Post Blog
 * Template Post Type: post
 */
get_header(); ?>

<!-- BANNER-FLAGS -->
<div class="bnr-tpc">
    <div class="container" style="margin-top: 77px">
        <h1 class="ttl-tpc">Blog</h1>
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

                get_template_part( 'template-parts/content/content', 'blog' );

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

                if (get_the_category()[0]->term_id == 1) {
                    $post_type = 'ARTIGOS';
                } elseif (get_the_category()[0]->term_id == 5) {
                    $post_type = 'VÍDEOS';
                }

                echo '<div class="related-post" style="margin-top: 50px;">';
                echo '<h1 style="text-align: center; color: #F1B948;margin-bottom: 30px;">OUTROS '.$post_type.'</h1>';
                echo do_shortcode('[vc_basic_grid post_type="post" max_items="3" item="312" grid_id="vc_gid:1590930925269-63bbe0bf-9046-4" taxonomies="'.get_the_category()[0]->term_id.'" el_class="videos-post-midia" exclude="'.get_the_ID().'"]');
                echo '</div>';

            endwhile; // End the loop.
            ?>

        </div><!-- ./box-flags -->
    </div><!-- ./container -->
</section>

<?php get_footer();