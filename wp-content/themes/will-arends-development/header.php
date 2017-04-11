<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Will_Arends_Development
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'will-arends-development' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="navbar-wrapper">
		    <nav class="navbar navbar-default" role="navigation">
		        <div class="container">
		          <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
							<a class="navbar-brand" href="/">
								Will Arends Dev
								<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Will Arends Development"> -->
							</a>
		        </div><!--end navbar-header-->

		          <?php
		        wp_nav_menu(array (
								'theme_location'	=> 'menu-1',
								'menu_id' 				=> 'primary-menu',
		            'depth'           =>  2,
		            'container'       =>  'nav',
		            'container_class' =>  'navbar-collapse collapse',
		            'container_id'    =>  'bs-example-navbar-collapse-1',
		            'menu_class'      =>  'nav navbar-right navbar-nav'
							));
		      ?>

		      </div><!--/.container-->
		    </nav>
		</div><!--navbar-header-->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
