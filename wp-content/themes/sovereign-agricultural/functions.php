<?php
// 4D 69 6C 6E  4C 74 64
// =================================================================
// 		Miln Ltd
// 			Digital Experiences
// 		Wordpress Functions
// =================================================================


function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

show_admin_bar(false);

add_theme_support( 'post-thumbnails' );
?>