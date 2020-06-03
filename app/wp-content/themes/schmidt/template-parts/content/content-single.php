<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content" style="padding: 100px 150px;">
		<?php

		if (get_the_category()[0]->term_id == 7 || get_the_category()[0]->term_id == 12) {
			echo the_title('<h2 style="font-family: Poppins;font-weight: 500;font-size: 36px;line-height: 41px;text-align: center;color: #26325C;margin-bottom:70px">', '</h2>');
		}

		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( ! is_singular( 'attachment' ) ) : ?>
		<?php get_template_part( 'template-parts/post/author', 'bio' ); ?>
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
