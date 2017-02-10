<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tcaster
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header" style="background-image: url(<?php echo( get_header_image() ); ?>); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="header__logo">
						<!-- Logo personalizado -->
						<?php 
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if ( has_custom_logo() ) {
								echo '<img src="'. esc_url( $logo[0] ) .'">';
							} else {
								echo '';
							} 
						?>
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description') ?></h2>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="menu">
		<div class="container">
			<div class="row">
				<!--Nav-->
				<div class="col-md-9 col-xs-12">
					<?php get_template_part('template-parts/nav','principal'); ?>
				</div>
				<!-- /Nav -->
				<!--Social-->
				<div class="col-md-3 col-xs-12">
					<div class="menu__social">
						<?php get_template_part('template-parts/nav','social') ?>
					</div>
				</div>
				<!--/Social-->
		</div>
	</div><!-- /Container -->
</section>
<!--/Menu-->