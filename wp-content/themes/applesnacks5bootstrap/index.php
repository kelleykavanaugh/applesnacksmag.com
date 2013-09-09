<?php get_header(); ?>
<h2><center>Friday, <?php echo get_the_date(); ?></h2></center>
  <div id="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- Start The Loop -->
    <div class="span4">
      <div id="category">
        <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?>
      </div><!-- End Category-->
      <center><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></center>
      <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
      <?php the_excerpt() ?>
    </div><!-- End Span 4-->
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?><!-- End the Loop -->
  </div><!-- End "content" -->
<?php get_footer(); ?>