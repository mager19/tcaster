<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

get_header(); ?>
<div class="section menu">
		<div class="container">
			<div class="row">
				<!--Nav-->
				<div class="col-md-9">
					<?php get_template_part('template-parts/nav','principal'); ?>
				</div>
				<!-- /Nav -->
				<!--Social-->
				<div class="col-md-3">
					<div class="menu__social">
						<ul>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/twitter.png" alt="twitter"></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/facebook.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/instagram.png" alt=""></a></li>
							<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/rss.png" alt=""></a></li>
						</ul>
					</div>
				</div>
				<!--/Social-->
		</div>
	</div><!-- /Container -->
</div>
<!--/Menu-->

<!--Principal-->
<section class="contenedor principal">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10">
				<div class="posts">
					<?php 
					if( have_posts() ) : while( have_posts() ) : the_post(); ?>
						<div class="posts__item">
							<div class="posts__item__titulo" style="background-image: url(<?php the_post_thumbnail_url('imagen-post'); ?>);">
								<h3><?php the_title(); ?></h3>								
							</div>
							<div class="posts__item__contenido">
								<h4><?php the_date( 'd M Y', '<span> ',  '</span> /' ); ?> <?php the_category( ', ' ); ?> </h4>
								<p><?php the_excerpt(); ?></p>
								<div class="row">
									<div class="col-md-12">
										<a class="more pull-right" href="<?php the_permalink(); ?>">Leer mas.</a>
									</div>
								</div>
							</div>
							
						</div>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/principal-->

<?php
// get_sidebar();
get_footer();
