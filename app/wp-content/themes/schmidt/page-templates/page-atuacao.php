<?php
/*
* Template Name: Pagina Atuação
*/

get_header(); 

if($_GET['tag'] && !empty($_GET['tag'])){
    $tag =$_GET['tag'];
    $posttype = $_GET['post_type'];

}
else{
    $posttype = 'custom_post_type';
}

?>

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>

                        <div id="content" <?php post_class(); ?>>
                            <script>
                            jQuery(document).ready(function() {
                                let searchParams = new URLSearchParams(window.location.search);

                                if (searchParams.has('format')) {
                                    let format = searchParams.get('format');
                                    jQuery('#format_field').find('option[data-text="'+format+'"]').prop("selected","selected");
                                    jQuery("#format_field").trigger("change");
                                    jQuery(".post_header_featured").hide();
                                    jQuery(".newsletter").hide();
                                }

                                jQuery(".filter-item").on("click", function(){
                                    let input = jQuery('#tag_field');
                                    let tag = jQuery(this).attr('data-filter');
                                    console.log(tag)

                                    jQuery(this).parent().find('li').removeClass('active');
                                    jQuery(this).addClass('active');

                                    jQuery.ajax({
                                        url: "<?php echo admin_url('admin-ajax.php'); ?>",
                                        data: {
                                            'action' : 'filter_menu' ,
                                            'tag': tag, 
                                            'posttype' : 'post',
                                            'paged' : 1, 
                                        },
                                        type: 'POST',
                                        success: function(data) {
                                            jQuery(".load_html").html(data);    
                                        }
                                    });  
                                });

                                // jQuery("#format_field > option").prop("selected","selected");
                                // jQuery("#format_field").trigger("change");
                            });
                            function changeTag(e, tag) {
                                
                            };  
                            </script>
                            <form action="" method="" class="" id="filter-menu" >
                            <?php 
                            $format = get_terms('format', array('hide_empty' => true));
                            echo '<div class="select-fields"><div class="title"><h3>TODAS PROPOSIÇÕES</h3></div><div class="selects">';
                            ?>
                            <div class="filter-atuacao">
                                <span>Filtrar por</span>
                                <ul>
                                    <li class="filter-item" data-filter="pl-em-tramite">PL em trâmite</li>
                                    <li class="filter-item" data-filter="pl-aprovado">PL aprovado</li>
                                    <li class="filter-item" data-filter="indicacao">Indicação</li>
                                    <li class="filter-item" data-filter="requerimento">Requerimento</li>
                                </ul>
                            </div>
                            <?php
                            $categories = get_terms('category', array('hide_empty' => true, 'exclude' => array(1, 44)) );
                            echo '</div></div>';
                            ?>
                            <input type="hidden" name="posttype" id="posttype" value="<?php echo $posttype; ?>" />
                            </form>
                            <div class="container">
                                <div class="load_html row">

                                    <?php
                                        $args = array(
                                        'post_per_page'=> -1,
                                        's'=>$tag
                                        );

                                        $query= new WP_Query($args);
                                        while($query->have_posts()): $query->the_post();

                                        $post_id = get_the_ID();
                                        $title = get_the_title($post_id);
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
                                        $image = $image[0];
                                        $classLocked = '';
                                        $link = 'href="'.get_the_permalink($post_id).'"';
                                    ?>


                                    <article <?php post_class('col-xs-6 col-sm-3 col-md-3 post force-content'); ?>>
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

                                    <?php endwhile; wp_reset_query(); ?>
                                </div>
                            </div>
                        </div> <!-- end content -->

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
