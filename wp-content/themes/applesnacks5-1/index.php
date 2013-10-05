    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span12">
          <h1>Friday, <?php echo get_the_date(); ?></h1>
      </div><!--/span12-->
    </div><!--/row-fluid-->
    <div class="row-fluid">
<!-- COLUMN 1 -->
      <!-- Start the Loop -->
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="span4">
        <div id="box-in" class="clearfix"><!--box in-->
        <div id="category">
          <em><?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></em>
        </div><!-- End Category-->
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
        </em></small></p>
        <!--/text-right-->
        <?php the_excerpt() ?>
        </div><!--/box-in-->
      </div><!-- /.span4-->
      <!-- End The Loop -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>

<!--END COLUMN 1 -->
    </div><!--/row-fluid-->
      <div class="navigation">
      <?php previous_posts_link( 'Newer Issue' ); ?>//
      <?php next_posts_link( 'Older Issue' , $max_pages ); ?>
    </div><!-- End Navigation-->

    <?php get_footer(); ?>