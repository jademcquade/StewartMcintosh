<?php get_header(); ?>

<?php $detect = new Mobile_Detect; ?>

	<?php query_posts( 'category_name=homepage-banner' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div id="slider">

		<div class="slideImg">

		<?php

			if ($detect->isMobile()) {
				echo 'You on mobile';
			} 

		?>

		</div>

		<?php endwhile;

		wp_reset_query(); ?>

	</div>	

	<div id="overlay">

		<div id="intro">
			<?php query_posts( 'category_name=homepage-message' );

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

<?php get_footer(); ?>
