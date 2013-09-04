<?php get_header(); ?>

<?php get_header(); ?>
		<div id="single">
		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<div id="single-title"><?php the_title(); ?></div>
                <div class="alignright"><em>By</em>: <strong><?php the_author_posts_link(); ?></strong></div>
                <div class="date"><?php the_date(); ?></div>
                <hr />
                
                <?php the_content(); ?>
                
                
                <?php the_tags( '<p class="tags">Tags: ', ', ', '</p>'); ?>
                <div class="alignright"> <a href=>Read more from <?php $category = get_the_category();  echo $category[0]->cat_name; ?></a></div>
                <div class="navigation-post">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div>
                
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>            
            </div><!-- End Single-->



            	<div class="navigation">
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>
            

        <?php get_footer(); ?>