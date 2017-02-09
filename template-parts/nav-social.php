<?php
/**
 * Template part for Nav - Social
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

?>
<!-- Enlaces Redes sociales --> 
<ul>
	<?php 
		if( get_theme_mod('twitter') ):
			$twitterUrl = get_theme_mod('twitter');?>
			<li><a href="<?php echo esc_url('http://twitter.com/'.$twitterUrl); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter" ></a></li>
	<?php	
		endif;
	?>
	<?php 
		if( get_theme_mod('facebook') ):
			$facebookUrl = get_theme_mod('facebook');?>
			<li><a href="<?php echo esc_url('http://facebook.com/'.$facebookUrl); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a></li>
	<?php
		endif;
	?>

	<?php 
		if( get_theme_mod('instagram') ):
			$instagramUrl = get_theme_mod('instagram');?>
			<li><a href="<?php echo esc_url('http://instagram.com/'.$instagramUrl); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a></li>
	<?php
		endif;
	?>

	<?php 
		if( get_theme_mod('rss') ):
			$rssUrl = get_theme_mod('rss');?>
			<li><a href="<?php echo esc_url($rssUrl); ?>" target=_blank><img src="<?php echo get_template_directory_uri(); ?>/img/rss.png" alt=""></a></li>
	<?php
		endif;
	?>
	

</ul>