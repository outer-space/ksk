<?php get_header(); ?>

   <div class="blog search-results">

			<?php if ( have_posts() ) : ?>

				<h1><?php printf( __( 'Search Results for: <b>%s</b>', 'deerhaus' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="post">
	        	<div class="entry">
	        		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<h5 class="date"><?php the_time('F j Y'); ?></h5>
							<h5 class="author"><?php the_author(); ?></h5>
							<?php the_excerpt(); ?> 
						</div>
					</article>

				<?php endwhile; ?>

			<?php else : ?>

				<div class="no-dice">
					<h1>NO DICE.</h1>
					<h5>Try again?</h5>
				</div>

			<?php endif; ?>

		</div>


<?php get_footer(); ?>