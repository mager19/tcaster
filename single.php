<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tcaster
 */

get_header(); ?>
<!-- Single -->
<section class="contenedor single">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php while ( have_posts() ) : the_post(); ?>
				<!-- post -->
					<h3><?php the_title(); ?></h3>
					<div class="destacada">
						<?php the_post_thumbnail('imagen-post'); ?>
					</div>

					<div class="col-md-10 col-md-offset-1">
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
				<!-- post navigation -->				
			</div>
		</div>
	</div>
</section><!-- /Single -->

<div class="section banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('template-parts/suscribirse'); ?>
			</div>			
		</div>
	</div>
</div>


<?php
get_footer();
