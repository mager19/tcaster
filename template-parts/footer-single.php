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
							<?php
							if ( get_theme_mod( 'rss' ) ):
								$rss = get_theme_mod( 'rss' );?>
								<li><a href="<?php echo esc_url( $rss ); ?>" target=_blank>Rss Feed</a></li>	
							<?php endif ?>
							<?php
							if ( get_theme_mod( 'newsletter' ) ):
								$newsletter = get_theme_mod( 'newsletter' );?>
								<li><a href="<?php echo esc_url( $newsletter ); ?>" target=_blank>Newsletter</a></li>
							<?php endif;	
							?>
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