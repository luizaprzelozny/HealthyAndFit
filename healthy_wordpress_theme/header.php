<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Healthy&Fit
 */

?><!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Healthy&amp;Fit</title>
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory');?> /assets/img/favicon.ico">

	<!--Google Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">

	<!--Bootstrap-->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!--Font Awesome-->
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<!--HEADER-->
	<header class="site-header" role="banner">

		<!--NAVBAR-->
		<div class="navbar-wrapper">
			
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory');?>/assets/img/h_logo.png" class="header-img" alt="Healthy&amp;Fit"></a>
					</div>

					<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->

					<?php
						wp_nav_menu( array(
							'theme_location' 	=> 'primary',
							'container'		 	=> 'nav',
							'container_class' 	=> 'navbar-collapse collapse',
							'menu_class' 	 	=> 'nav navbar-nav navbar-right'

							));
							?>
					<!-- <div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="omnie.html">O mnie</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="dieta.html">Dieta</a></li>
							<li><a href="fitness.html">Fitness</a></li>
							<li><a href="kontakt.html">Kontakt</a></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</header>