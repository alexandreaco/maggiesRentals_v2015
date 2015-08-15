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
	<script type="text/javascript" src="http://fast.fonts.net/jsapi/3918724f-1fd0-44f7-a05a-6dd85ec8c8d3.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>




	<?php wp_head(); ?>
</head>

<body>

	<header class="header-wrapper">
		<div class="social-header">
			<div class="container">
				<ul>
					<li><i class="fa fa-twitter"></i></li>
					<li><i class="fa fa-facebook"></i></li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div class="row header">
				<div class="col-xs-12">
					<h1 class="site-title"> <a href="<?php bloginfo('url') ?>"><?php bloginfo('name')?> </a></h1>
				</div>


					<?php
            wp_nav_menu( array(
                'menu'              => 'primary_menu',
                'theme_location'    => 'primary_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        				'container_id'      => 'nomads-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
			</div>
		</div>
	</header>
	<div class="wrapper main-content">
