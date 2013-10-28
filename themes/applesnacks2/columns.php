<?php
/*
Template Name: Columns
*/
 get_header(); ?>

	<div id="single">
		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Content -->
			<div id="content">
			<?php the_content() ?>
		<!-- End Content--></div>
		<!--Author -->
			<div id="author">
				By: <?php the_author_posts_link() ?>
		<!--End Author --></div>


            	<div id="single-title"-->
			<?php the_title(); ?>
                <div id="columns">
	               <?php wp_list_categories( 'title_li' ); ?>

			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
		<!-- End The Loop -->
		<!--End Single Title></div>
		<!--End Columns--></div>

        <?php get_footer(); ?>