<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fimestheme
 */

?>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url('https://github.com/fimesfi/fimestheme', 'fimestheme'); ?>">
				<?php printf( esc_html__( 'Fimestheme', 'fimestheme' )); ?>
			</a>
			<?php printf( esc_html__( 'by Fimes.fi %1$s v%2$s', 'fimestheme' ), '•', esc_attr( THEME_VERSION )); ?>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

<a href="#page" id="top" class="top" data-version="<?php echo esc_attr( THEME_VERSION ); ?>">
  <span class="screen-reader-text"><?php echo esc_html( get_default_localization( 'Back to top' ) ); ?></span>
  <span aria-hidden="true">&uarr;</span>
</a>

</body>
</html>
