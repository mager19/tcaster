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



<!--Principal-->
<section class="contenedor principal">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-xs-10 col-xs-offset-1">
				<div class="posts">
					<?php 
					$args = array('post_type' => 'post', 'posts_per_page' => 3);
					$loop = new WP_Query($args);

					if( $loop->have_posts() ) : while( $loop->have_posts() ) : $loop->the_post(); ?>
						<!-- Posts Item -->
						<div class="posts__item">
							<a href="<?php the_permalink(); ?>">
								<?php 
								if( has_post_thumbnail()):?>
									<div class="posts__item__titulo" style="background-image: url(<?php the_post_thumbnail_url('imagen-post'); ?>);">
										<h3><?php the_title(); ?></h3>
									</div>								
								<?php else:?>
									<div class="posts__item__titulo" style="background-color:#f5f5f5;border:1px dashed #30A9DE;">
										<h3><?php the_title(); ?></h3>								
									</div>
								<?php
								endif;?>
							</a>							
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="posts__item__contenido">
										<h4><?php the_date( 'd M Y', '<span> ',  '</span> /' ); ?> <?php the_category( ', ' ); ?> </h4>
										<p><?php the_excerpt(); ?></p>
										<div class="row">
											<div class="col-md-12">
												<a class="more" href="<?php the_permalink(); ?>">Leer mas.</a>
											</div>
										</div>
									</div>
								</div>
							</div>							
						</div><!-- /Posts Item -->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
		
		<!-- Banner -->
		<aside class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3><?php bloginfo('name'); ?></h3>
						<p><?php bloginfo('description'); ?></p>
					</div>
					<div class="col-md-7">
						<h4>Todos los Episodios.</h4>
					</div>
				</div>
			</div>
		</aside><!-- /Banner -->
 
	<div class="container">
		<div class="row">
			<div class="contenedor">
				<?php 
					$args2 = array('offset' => 3, 'posts_per_page' => 12);
					$loop2 = new WP_Query($args2);

					if ( $loop2->have_posts() ) : while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
					<!-- post -->
						<div class="col-md-4 col-xs-6">
							<div class="posts__item--secundarios">
								<a href="<?php the_permalink(); ?>">
									<?php 
									if( has_post_thumbnail()):?>
										<div class="posts__item__titulo--secundarios" style="background-image: url(<?php the_post_thumbnail_url('imagen-post-secundarios'); ?>);">
											<h3><?php the_title(); ?></h3>
										</div>								
									<?php else:?>
										<div class="posts__item__titulo--secundarios" style="background-color:#f5f5f5;border:1px dashed #30A9DE;">
											<h3><?php the_title(); ?></h3>								
										</div>
									<?php
									endif;?>
								</a>	
							</div>
						</div>					
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>			
					<?php wp_reset_postdata(); ?>		
			</div>		
		</div>
	</div>
</section>
<!--/principal-->

<?php
// get_sidebar();
get_footer();
