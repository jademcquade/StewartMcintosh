<?php get_header(); ?>

<div id="slider">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="slideImg">
	<?php
		if (is_mobile()) {
		   the_post_thumbnail('small');
		   }
		else if (is_tablet()) {
		   the_post_thumbnail('medium');
		}
		else {
			the_post_thumbnail('home-slider');
		} 
	?>
	</div>

				
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

	<div id="overlay">

		<div id="intro">
			<?php query_posts( 'category_name=homepage message' );

				while ( have_posts() ) : the_post();

				the_content();
				    
				endwhile;

				wp_reset_query();
			?>
		</div>

	</div>		

</div><!-- end slider -->



<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div id="trio" class="entry-content">

				<div>
					<?php query_posts( 'category_name=clarity' );

					while ( have_posts() ) : the_post();
					    echo '<h2>'; the_title(); echo '</h2>';
					    echo the_content();
					endwhile;

					wp_reset_query();
					?>
				</div>

				<div>
					<?php query_posts( 'category_name=brevity' );

					while ( have_posts() ) : the_post();
					    echo '<h2>'; the_title(); echo '</h2>';
					    echo the_content();
					endwhile;

					wp_reset_query();
					?>
				</div>

				<div>
					<?php query_posts( 'category_name=verity' );

					while ( have_posts() ) : the_post();
					    echo '<h2>'; the_title(); echo '</h2>';
					    echo the_content();
					endwhile;

					wp_reset_query();
					?>
				</div>

			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer( 'home' ); ?>
