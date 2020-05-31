<?php
/*
 * Template Name: Post Atuação/Bandeira
 * Template Post Type: post
 */
get_header(); ?>

<!-- BANNER-FLAGS -->
<div class="bnr-tpc">
    <div class="container">
        <h1 class="ttl-tpc"><?php the_title(); ?></h1>
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
                        )
                    );
                    echo '</div>';
                }

            endwhile; // End the loop.
            ?>

        </div><!-- ./box-flags -->
    </div><!-- ./container -->
</section>

<?php get_footer();