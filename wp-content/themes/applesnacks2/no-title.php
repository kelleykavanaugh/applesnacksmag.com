<?php
/*
Template Name: No Title
*/
 get_header(); ?>

        	<div class="single"> <!--Single-->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                
                <?php the_content(); ?>
                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
            
            
            
            </div><!--End Single-->
        <?php get_footer(); ?>