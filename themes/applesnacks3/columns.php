<?php
/*
Template Name: Columns
*/
 get_header(); ?>

	<div id="single">
		<!-- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Content -->
			<div id="content">
			<?php the_content() ?>
		<!-- End Content--></div>
		<!--Author -->
			<div id="author">
				By: <?php the_author_posts_link() ?>
		<!--End Author --></div>


            	<div id="single-title">
			<?php the_title(); ?>
		</div><!-- End SINGLE TITLE-->
                <div id="columns">

<?php $categories = get_categories();
foreach ($categories as $cat) {
	if ($cat->category_parent != 0) {
		echo '<span style="padding-left:10px;">';
	}
	echo '<a href="'.get_option('home').'/'.'category'.'/'.$cat->category_nicename.'/">'.$cat->cat_name.'</a>';
	if ($cat->category_description != '') {
		echo ' <br> '.$cat->category_description;
		echo ' <br> ';
	}
	echo '<br />';
}
?>




			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
		<!-- End The Loop -->

		<!--End Columns--></div>
</div></div>
        <?php get_footer(); ?>