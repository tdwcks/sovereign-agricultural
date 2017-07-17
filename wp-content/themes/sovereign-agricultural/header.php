<!doctype html>
	<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
	<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
	<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
	<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php the_title(''); ?> | Sovereign Agricultural</title>

		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/apple-touch-icon.png">
	    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon-32x32.png" sizes="32x32">
	    <link rel="icon" type="image/png" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon-16x16.png" sizes="16x16">
	    <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/manifest.json">
	    <link rel="mask-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
	    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicons/favicon.ico?v2">
	    <meta name="msapplication-config" content="<?php bloginfo('stylesheet_directory'); ?>/favicons/browserconfig.xml">
	    <meta name="theme-color" content="#ffffff">

		<script src='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js'></script>
		<link href='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css' rel='stylesheet' />

		<script src="https://use.typekit.net/gce6yyu.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?ver=' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<div class="page-wrap">

		<header>
			<div class="grid-container">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" class="logo" width="135" alt="Sovereign Agricultural Services Ltd"></a>
				<a class="hamburger"></a>
				<nav>
					<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
				</nav>
				<a href="tel:01484 603682" class="telephone"><i class="fa fa-phone"></i> 01484 603682</a>
			</div>
		</header>
