<?php get_header(); ?>

<main class="container">
	<?php
		if ( have_posts() ) :
			// Start the Loop.
			while ( have_posts() ) : the_post(); ?>
				<?php
					if ( has_post_thumbnail() ):
						the_post_thumbnail( 'large' );
					endif;
				 ?>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			<?php endwhile;
		endif;
	?>
</main>


<?php get_footer(); ?>