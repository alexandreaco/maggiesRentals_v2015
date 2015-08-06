<?php
/*
 *	Header : Nomads Base Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!-- Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>

<body>

	<header class="header-wrapper">
		<div class="secondary-nav-wrapper">
			<?php wp_nav_menu(array( 'theme_location' => 'secondary', 'container' => 'nav', 'container_class' => 'container', 'menu_class' => '', 'fallback_cb' => '' )); ?>
		</div>
		<div class="container primary-nav-wrapper">
			<h1 class="title pull-left"> Maggie's Rentals </h1>
			<?php wp_nav_menu(array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'main-nav pull-right', 'menu_class' => '', 'fallback_cb' => 'wp_page_menu' )); ?>
		</div>
	</header>
	<div class="wrapper main-content">
		<div class="container">
