<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

get_header(); ?>
	<section class="page contenedor">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<div class="content">
							<?php the_content(); ?>
						</div>
					<!-- post -->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
