<?php
/*
* Template Name: Parallax Container
*/

get_header();
?>
<div class="dots-menu">
    <ul>
        <li><span class="dots-link dot-active" onclick="javascript:gotoItem(0);"><span></span></span></li>
        <li><span class="dots-link" onclick="javascript:gotoItem(1);"><span></span></span></li>
        <li><span class="dots-link" onclick="javascript:gotoItem(2);"><span></span></span></li>
        <li><span class="dots-link" onclick="javascript:gotoItem(3);"><span></span></span></li>
    </ul>
</div>
<div class="body-container">
    <?php
        while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/parallax', 'page-full' );
        endwhile;  
    ?>
    <?php get_footer(); ?>
</div>