<?php get_header(); ?>
		<div id="single">
		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<div id="single-title"><?php the_title(); ?></div>
                <div class="alignright"><em>By</em>: <strong><?php the_author_posts_link(); ?></strong></div>
                <div class="date"><?php the_date(); ?></div>
                <hr />
                <div id="justify">
                <?php the_content(); ?>
		</div><!-- END JUSTIFIED-->
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>

            </div><!-- End Single-->

                <div class="alignright"><a href=<?php the_category(); ?></a></div>     

        <?php get_footer(); ?>