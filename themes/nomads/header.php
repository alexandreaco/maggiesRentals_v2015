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
	
	
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<?php wp_head(); ?>
</head>

<body>

	<header class="app-bar promote-layer">
      <div class="app-bar-container">
        <button class="menu"><img src="<?php echo get_template_directory_uri() ?>/app/images/hamburger.svg" alt="Menu"></button>
      </div>
    </header>


	<div class="container-fluid menu-wrapper"> 
		<?php wp_nav_menu(array( 'theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'main-nav', 'menu_class' => '', 'fallback_cb' => 'wp_page_menu' )); ?>
	</div>
	<div class="wrapper main-content">	
		<div class="container">


    

