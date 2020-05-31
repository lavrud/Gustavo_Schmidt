<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once get_template_directory(  ) . '/class-wp-bootstrap-navwalker.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';


register_nav_menus(      
     array(
         'navbar_menu'     =>  __('Menu principal', 'schmidt'),
     )   
);

show_admin_bar(false);

add_filter('use_block_editor_for_post', '__return_false', 10);

function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function get_post_tag_list($post_id) {
	$tags = wp_get_post_tags($post_id, array('exclude' => array( 44 )));
	foreach ( $tags as $tag ) {
		echo '<a href="' . esc_url( get_tag_link( $tag ) ) . '">' . get_tag( $tag )->name . '</a>';
	}
}


add_action( 'wp_ajax_filter_menu', 'wp_ajax_filter_menu' );
add_action( 'wp_ajax_nopriv_filter_menu', 'wp_ajax_filter_menu' );

function wp_ajax_filter_menu() {
	global $post, $wp_query;

	$args = array(
        'post_type' => 'post',
        'cat'       => 'atuacao',
		'tag'       => $_POST['tag'],
		'orderby'   => 'ASC',
    );

	$filteroption = new WP_Query( $args );
	if ( $filteroption->have_posts() ) {
        while ($filteroption->have_posts()) : $filteroption->the_post();
        
            $post_id = get_the_ID();
            $title = get_the_title($post_id);
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
            $image = $image[0];
            $classLocked = '';
            $link = 'href="'.get_the_permalink($post_id).'"';
        ?>

        <article <?php post_class('col-xs-6 col-sm-6 post force-content'); ?>>
            <div class="inner-wrap">
                <div class="post-content">
                    <div class="content-inner">
                        <a class="entire-meta-link" <?php echo $link; ?>></a>
                        <span class="post-featured-img<?php echo $classLocked; ?>" style="background-image: url('<?php echo $image; ?>')"></span>
                        <div class="article-content-wrap">
                            <span class="meta-category">
                                <?php echo get_post_tag_list($post_id); ?>
                            </span>
                            <div class="post-header">
                                <h3 class="title">
                                    <a <?php echo $link; ?>><?php echo $title; ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
		<?php 
		endwhile; 
	} else { ?>
		<p>Nenhum resultado encontrado.</p>
	<?php } 
	die;
}

function sc_taglist(){
    $tags = wp_get_post_tags(get_the_ID(), array('exclude' => array( 44 )));
	foreach ( $tags as $tag ) {
		echo '<a href="' . esc_url( get_tag_link( $tag ) ) . '">' . get_tag( $tag )->name . '</a>';
	}
}
add_shortcode('tags', 'sc_taglist');


add_filter( 'vc_grid_item_shortcodes', 'get_post_tags_grid_builder' );
function get_post_tags_grid_builder( $shortcodes ) {
    $shortcodes['vc_post_content'] = array(
        'name' => __( 'Post Tags' ),
        'base' => 'vc_post_content',
        'category' => __( 'Content' ),
        'description' => __( 'Show current post content' ),
        'post_type' => Vc_Grid_Item_Editor::postType(),
    );
    return $shortcodes;
}

add_filter( 'vc_gitem_template_attribute_post_tags', 'vc_gitem_template_attribute_post_tags', 10, 2 );
function vc_gitem_template_attribute_post_tags( $value, $data ) {

    extract( array_merge( array(
    'post' => null,
    'data' => '',
    ), $data ) );

    $tag_list = '';

    $tags = wp_get_post_tags($post->ID, array('exclude' => array( 44 )));
    foreach ( $tags as $tag ) {
        $tag_list .= '<div class="meta-tag">' . get_tag( $tag )->name . '</div>';
    }
    return $tag_list;
} 

add_shortcode( 'vc_post_content', 'vc_post_content_render' );
function vc_post_content_render() {
    return '{{post_tags}}';
}