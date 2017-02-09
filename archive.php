<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

get_header(); ?>

<section class="contenedor archive">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if ( have_posts() ) : 
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );				
				while ( have_posts() ) : the_post();?>
					<div class="posts__item__contenido">
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
						<div class="row">
							<div class="col-md-12">
								<a class="more" href="<?php the_permalink(); ?>">Leer mas.</a>
							</div><br>
							<br>
							<br>
							<br>
						</div>
					</div>
				<?php endwhile;
					the_posts_navigation();
				else :
						?>
				<?php 
				endif;
				?>
			</div>
		</div>
	</div>
</section>
	
<?php
get_footer();
