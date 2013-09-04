<?php get_header(); ?>
		<div id="single">
		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<div id="single-title"><?php the_title(); ?></div>

                <?php the_content(); ?>

                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>            
            </div><!-- End Single-->
                

        <?php get_footer(); ?>