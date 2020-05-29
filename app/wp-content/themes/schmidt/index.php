<?php

get_header(); ?>

<?php if ( get_theme_mod( 'blog_display_cover_section', 1 ) ) : ?>
	<?php if( get_theme_mod( 'blog_cover_title' ) || get_theme_mod( 'blog_cover_lead' ) || get_theme_mod( 'blog_cover_btn_text' ) ) : ?>
		<section class="jumbotron bg-white text-center wp-bs-4-jumbotron border-bottom">
			<div class="container">

				<h1 class="jumbotron-heading"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_title' ) ); ?></h1>
				<p class="lead text-muted"><?php echo wp_kses_post( get_theme_mod( 'blog_cover_lead' ) ); ?></p>
				<?php if( get_theme_mod( 'blog_cover_btn_text' ) ) : ?><a href="<?php echo esc_url( get_theme_mod( 'blog_cover_btn_link' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'blog_cover_btn_text' ) ); ?></a><?php endif; ?>
			</div>
			<!-- /.container -->
		</section>
		<!-- /.jumbotron text-center -->
	<?php endif; ?>
<?php endif; ?>

	<div class="container">
		<div class="row">

            <div class="col-md-12 wp-bp-content-width">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>

						<?php
						endif;

						if( get_theme_mod( 'blog_display_posts_slider', '1' ) && is_home() && !is_paged() ) {
							get_template_part( 'template-parts/posts-slider' );
						}

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							// Include the Post-Format-specific template for the content.
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;

						the_posts_navigation( array(
							'next_text' => esc_html__( 'Newer Posts'),
							'prev_text' => esc_html__( 'Older Posts'),
						) );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<!-- /.col-md-8 -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->

<?php
get_footer();
