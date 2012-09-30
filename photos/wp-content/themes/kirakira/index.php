<?php get_header(); ?>
 
    <div class="blog index">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
 
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

				<?php endwhile; ?>

				<nav class="pages">
					<?php posts_nav_link(' ','<div class="prev">&laquo; Previous Page</div>', '<div class="next">Next Page &raquo;</div>'); ?>
        </nav>
 
        <?php endif; ?>
    </div>
<?php get_footer(); ?>

