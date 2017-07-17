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

/*-----------------------------------------------------------------------------------*/
/* Moves Yoast SEO plugin to the bottom
/*-----------------------------------------------------------------------------------*/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');

/*-----------------------------------------------------------------------------------*/
/* Aye! Login
/*-----------------------------------------------------------------------------------*/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/aye-colour.svg);
            background-size: 120px;
            height: 65px;
            width: 120px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*-----------------------------------------------------------------------------------*/
/* Custom posts
/*-----------------------------------------------------------------------------------*/

function create_posttype() {

	register_post_type( 'stock',
		array(
			'labels' => array(
				'name' => __( 'Stock' ),
				'singular_name' => __( 'Stock Item' )
			),
			'public' => true,
			'has_archive' => false,
			'menu_position' => 4,
			'hierarchical' => true,
			'menu_icon' => 'dashicons-archive',
			'supports' => array('thumbnail', 'title', 'editor'),
		)
	);
}
add_action('init', 'create_posttype');

?>