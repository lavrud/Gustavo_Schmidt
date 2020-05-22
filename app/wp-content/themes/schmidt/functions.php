<?php

require_once get_template_directory(  ) . '/class-wp-bootstrap-navwalker.php';


register_nav_menus(      
     array(
         'navbar_menu'     =>  __('Menu principal', 'schmidt'),
     )   
);
