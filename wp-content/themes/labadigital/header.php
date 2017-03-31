<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


	    <!-- MAIN CONTENT -->
	    <div class="container">
				<div id="nav">
					<a href="index.html"><img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="corso di web design"></a>

				<?php wp_nav_menu(array(

				)); ?>
				</div>
	      <!-- NAVIGATION
	      <nav id="nav">
	          <a href="index.html"><img src="img/logo.svg" alt="corso di web design"></a>
	          <ul>
	            <a href="index.html"><li>HOME</li></a>
	            <a href="corsi.html"><li>CORSI</li></a>
	            <a href="web.html"><li>WEB DESIGN</li></a>
	            <a href="app.html"><li>APP DESIGN</li></a>
	            <a href="contatti.html"><li>CONTATTI</li></a>
	            <a href="http://laba.edu/"><li>LABA</li></a>
	          </ul>
	      </nav>
				-->
