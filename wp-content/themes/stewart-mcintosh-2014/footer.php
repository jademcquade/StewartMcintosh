

	</div><!-- #page -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<div id="footerWrap">

				<div id="footerNav">

					<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
						<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
						<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					</nav>

				</div>

					<div id="emailContact">
						stewart.mcintosh@btinternet.com
					</div>

				<div class="site-info">
					<a target="_blank" href="<?php echo esc_url( __( 'http://www.geo-graphicsdesign.com/' ) ); ?>"><?php printf( __( 'site by %s' ), 'Geo-Graphics' ); ?></a>
				</div><!-- .site-info -->

			</div>

		</footer><!-- #colophon -->


	<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
</body>
</html>