<?php get_header(); ?>
            	<div id="single-title">Column: <?php single_cat_title(); ?></div>
	<!-- Start The Loop -->
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<!-- Box In -->
		<div id="box-in">
	<!-- Category -->
		<div id="category">
<br>
	<!-- End Category--></div>
	<!-- Title -->
		<div id=title>
	<a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</div><!-- End Title -->
	<!--Author -->
		<div id="author">
			 By: <?php the_author_posts_link() ?>
	<!--End Author --></div>
	<!-- Excerpt -->
		<div id="excerpt">
		<?php the_excerpt() ?>
	<!-- End Excerpt--></div>
	<!--End Box In--></div>
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
	<!-- End the Loop -->
	<!-- End "content" --></div>

                <div class="navigation">
			<?php previous_posts_link( 'Newer Issue' ); ?>
 			<?php next_posts_link( 'Older Issue' , $max_pages ); ?>
		<!-- End Navigation--></div>

        <?php get_footer(); ?>