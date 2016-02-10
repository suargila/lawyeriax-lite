<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qwertyuiop
 */

?>

		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
		  <div class="col-sm-4">
		    <?php if ( is_active_sidebar('footer_widget_col_1') ) {
		      dynamic_sidebar( 'footer_widget_col_1' );
		    } ?>
		  </div>

		  <div class="col-sm-4">
		    <?php if ( is_active_sidebar('footer_widget_col_2') ) {
		    dynamic_sidebar( 'footer_widget_col_2' );
		  } ?>
		  </div>
		  <div class="col-sm-4">
		    <?php if ( is_active_sidebar('footer_widget_col_3') ) {
		    dynamic_sidebar( 'footer_widget_col_3' );
		  } ?>
		  </div>
		</div>

		<div class="container">
			<div class="site-info">
				<div class="col-md-10 col-md-offset-1 section-line"></div>
				<div class="site-info-inner">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'qwertyuiop' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'qwertyuiop' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'qwertyuiop' ), 'qwertyuiop', '<a href="http://themeisle.com/" rel="designer">Themeisle.com</a>' ); ?>
				</div>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
