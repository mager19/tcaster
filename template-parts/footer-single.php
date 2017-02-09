<?php
/**
 * Template part for footer single
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tcaster
 */

?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-2">
						<span>Suscribirse:</span>
					</div>
					<div class="col-md-10">
						<ul>
							<li><a href="#">Rss Feed</a></li>
							<li><a href="#">Itunes </a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
				</div>		
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="col-md-2">
						<span>Contacto:</span>
					</div>
					<div class="col-md-8">
						<?php get_template_part('template-parts/nav','social') ?>
					</div>
				</div>		
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>