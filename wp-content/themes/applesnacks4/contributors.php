<?php
/*
Template Name: Contributors
*/
 get_header(); ?>

		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<div id="single-title"><?php the_title(); ?></div>

               <div id="authorlist">
		<?php contributors(); ?></div>

                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>            
                

        <?php get_footer(); ?>