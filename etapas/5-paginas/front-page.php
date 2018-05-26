<?php get_header(); ?>

		<!-- apresentação -->
		<div class="jumbotron">
			<h1><?php bloginfo('name'); ?></h1>
			<p class="lead"><?php bloginfo('description'); ?></p>
		</div>

		<!-- publicações -->
		<h2 class="h2">Minhas Publicações</h2>
		<hr>

		<div class="row">
			<?php
				if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post(); ?>
						<div class="col-md-4">
							<?php 
								if ( has_post_thumbnail() ) {
									the_post_thumbnail( 'medium' );
								}
							?>
							<h3><?php the_title(); ?></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="btn btn-md btn-success" href="<?php the_permalink(); ?>" role="button">Veja mais</a>
						</div>
					<?php endwhile;
				endif;
			?>
		</div>
		
<?php get_footer(); ?>