<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tcaster
 */

?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4 col-md-offset-4">
					<div class="menu__social">
						<?php get_template_part('template-parts/nav','social'); ?>
						<a href="http://twitter.com/mager19">Creado por @mager19</a>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
