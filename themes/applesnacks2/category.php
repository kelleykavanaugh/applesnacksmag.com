<?php get_header(); ?>
		<div id="single">
	<!-- Single Title -->
		<div id=single-title>
		<?php $category = get_the_category();  echo $category[0]->cat_name; ?><br>
	</div><!-- End Single Title -->

	<div id="cat-description"><?php echo category_description( $category_id ); ?></div>

	<!-- Start The Loop -->
        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
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
		<?php the_content(); ?>
	<!-- End Excerpt--></div>
                <?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
	<!-- End the Loop -->

		<div><!-- END SINGLE-->
        <?php get_footer(); ?>