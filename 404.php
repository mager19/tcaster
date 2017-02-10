<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tcaster
 */

get_header(); ?>

<section class="contenedor page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="cuatrocerocuatro">
					<h1>404</h1>
					<h3>Lo sentimos .... Esta p&aacute;gina no fue encontrada.</h3>
					<p>Pero a continuaci&oacute;n te presentamos las entradas recientes, quiza es una de las que buscas:</p>
					<?php 
					$args = array('posts_per_page' => 6);
					$loop = new WP_Query($args);

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<!-- post -->
						<div class="col-md-4 col-xs-12">
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
	</div>
</section>




	

<?php
get_footer();
