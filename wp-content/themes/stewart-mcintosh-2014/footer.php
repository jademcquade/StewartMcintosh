<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

				<div id="email">
					<p>stewart.mcintosh@btinternet.com</p>
				</div>

					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav>

				<div class="site-info">
					<a target="_blank" href="<?php echo esc_url( __( 'http://www.geo-graphicsdesign.com/' ) ); ?>"><?php printf( __( 'Site by %s' ), 'Geo-Graphics' ); ?></a>
				</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div><!-- #page -->

	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
</body>
</html>