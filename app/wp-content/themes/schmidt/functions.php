<?php

require_once get_template_directory(  ) . '/class-wp-bootstrap-navwalker.php';


register_nav_menus(      
     array(
         'navbar_menu'     =>  __('Menu principal', 'schmidt'),
     )   
);

show_admin_bar(false);

add_filter('use_block_editor_for_post', '__return_false', 10);
