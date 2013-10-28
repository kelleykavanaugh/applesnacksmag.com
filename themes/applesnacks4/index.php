<?php get_header(); ?>
	<div id="page-title">Friday, <?php echo get_the_date(); ?>
    </div><!--End Page Title -->
	<div id="content">
		<!-- Start The Loop --><?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="box">
				<div id="category">
					<?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?>
				</div><!-- End Category-->
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				<div id="author">By: <?php the_author_posts_link() ?>
				</div><!--End Author -->
				<div id="excerpt">
					<?php the_excerpt() ?>
				</div><!-- End Excerpt-->
			</div><!--End Box-->
		<!-- End the Loop --><?php endwhile; else: ?><p>Sorry, no posts matched your criteria.</p><?php endif; ?>
	</div><!-- End "content" -->
	<div class="navigation">
		<?php previous_posts_link( 'Newer Issue' ); ?>//
 		<?php next_posts_link( 'Older Issue' , $max_pages ); ?>
	</div><!-- End Navigation-->
<?php get_footer(); ?>