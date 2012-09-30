<?php get_header(); ?>

		<div class="blog index">
				<?php while ( have_posts() ) : the_post(); ?>

					
				<article class="post">

        	<div class="entry">

						<?php if ( is_category() || is_archive() ) {
							the_excerpt();
						} else { ?>
							<?php if( $post->post_excerpt ) { ?>
								<p class="excerpt"><?php echo $post->post_excerpt; ?></p>
							<?php } ?>

              <?php the_content(); ?>
						<?php } ?>

					<div class="text">

						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<h5 class="date"><?php the_time('F j Y'); ?></h5>
					
					</div>
          	</div>

        		</article>

        		<nav class="pages">
						<div class="prev"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'deerhaus' ) ); ?></div>
						<div class="next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'deerhaus' ) ); ?></div>
					</nav><!-- #nav-single -->


				<?php endwhile; // end of the loop. ?>
		</div>

<?php get_footer(); ?>