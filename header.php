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
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="header__logo">
						<img src="https://placeholdit.imgix.net/~text?txtsize=6&txt=50%C3%9750&w=100&h=100">
						<h1><?php bloginfo('name'); ?></h1>
						<h2><?php bloginfo('description') ?></h2>
					</div>
				</div>
			</div>
		</div>
	</header>