<?php get_header(); ?>

<div id="main-content">

	<div id="rotator">
		<?php $loop = new WP_Query( array( 'post_type' => 'home-images', 'posts_per_page' => -1 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>
		<img src="http://localhost/stewart-mcintosh/wp-content/themes/stewart-mcintosh/images/clyde.jpg" alt="clyde image" />
		<div id="overlay">
				<div id="strip"></div>
				<div id="intro">
					<h1>Welcome to the Write Way Up,</h1>
					a website dedicated to helping business people get their messages over to their clients with <span>clarity</span>, <span>brevity</span> and <span>verity</span>.
				</div>
			</div>
	</div>

	<div id="trio">

		<div>
			<?php

				query_posts( 'category_name=clarity' );

				while ( have_posts() ) : the_post();
				    echo '<h2 class="home">'; the_title(); echo '</h2>';
				   	echo '<p>'; the_content(); echo '</p>';
				endwhile;

				wp_reset_query();
				
			?>
		</div>

		<div>
			<?php

				query_posts( 'category_name=brevity' );

				while ( have_posts() ) : the_post();
				    echo '<h2 class="home">'; the_title(); echo '</h2>';
				   	echo '<p>'; the_content(); echo '</p>';
				endwhile;

				wp_reset_query();
				
			?>
		</div>

		<div>
			<?php

				query_posts( 'category_name=verity' );

				while ( have_posts() ) : the_post();
				    echo '<h2 class="home">'; the_title(); echo '</h2>';
				   	echo '<p>'; the_content(); echo '</p>';
				endwhile;

				wp_reset_query();
				
			?>
		</div>

	</div>

	<div id="apple">

	</div>

</div><!-- #main-content -->

<?php get_footer();