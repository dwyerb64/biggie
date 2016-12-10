<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<!-- This style allows nev text element color to be determined by WP acf option -->
<style type="text/css">
	@media only screen and (min-width: 768px){
		.special-color .menu li a {
		    color: <?php the_field('nav_element_color', 'option'); ?>;
		}
	}
</style>
<!-- -------------------------------------------------------------------------- -->
</head>


<body <?php body_class(); ?>>
<div class="container header-logo-container">
  <a href="<?php echo get_home_url() ?>" class="header-logo">
    <img src="<?php echo get_header_image(); ?>">
  </a>
</div>

<div class="container special-color">
	<?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_id' => 'social-menu', 'container_class' => 'hidden-xs' ) ); ?>	
</div>
<div class="special-color"
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu') ); ?>
</div>
<button type="button" id="mobile-menu" class="visible-xs collapsed navbar-toggle" > 
  <span class="icon-bar"></span> 
  <span class="icon-bar"></span>
</button>
<a href="<?php echo get_home_url() ?>" class="mobile-menu-home">
  <span></span>
</a>  