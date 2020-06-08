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

<style>
iframe {
	width: 100%;
	height: 400px;
	margin-top: 50px
}
</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content" style="padding: 100px 150px;">
		<?php
		the_date();
		the_title("<h2>", "</h2>");
		if (get_the_category()[0]->term_id != 5) {
			echo "<div class='post-image'>";
			wp_post_thumbnail();
			echo "</div>";
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
