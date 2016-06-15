<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<header class="header">
			<div class="container">
        <h1 class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            Oeste
            <small>
              supermercados
            </small>
          </a>
        </h1>


          <!-- <ul class="menu">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Institucional</a></li>
            <li class="drop-down"><a href="#">Ofertas</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Contatos</a></li>
          </ul> -->

					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container' => 'nav',
						'container_class' => 'navegation-header',
						'menu_class' => 'menu'
					));
					?>
        <button class="btn-icon" id="btn-responsive"> <i class="icon-menu"></i> </button>
			</div>
		</header>
        <main class="main">
          <div class="container">
