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
					<h4><?php the_date( 'd M Y', '<span> ',  '</span> /' ); ?> <?php the_category( ', ' ); ?> </h4>
					<?php the_post_thumbnail($size = 'imagen-post') ?>					
					<div class="col-md-10 col-md-offset-1">
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
				<!-- post navigation -->				
			</div>
		</div>
	</div>
</section><!-- /Single -->

<section class="comentarios">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="comments">
					<?php comments_template(); ?>
				</div><!-- #comments-area -->
			</div>
		</div>
	</div>
</section>

<?php
get_template_part('template-parts/footer','single');
		  
