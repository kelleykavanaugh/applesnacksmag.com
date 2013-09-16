    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span1">
      </div><!--/span1-->
      <div class="span10">
          <h1>Friday, <?php echo get_the_date(); ?></h1>
      </div><!--/span10-->
      <div id="span1">
      </div><!--/.span1 -->
    </div><!--/row-fluid-->
    <div class="row-fluid">   
<!-- COLUMN 1 -->
      <div class="span4">
      <!-- Start the Loop -->
      <?php $the_query = new WP_Query( array( 'posts_per_page' => 3, 'offset' => 0 ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div id="category">
          <em><?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></em>
        </div><!-- End Category-->
        <div id="box-in" class="clearfix"><!--box in-->
        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
        </em></small></p>
        <!--/text-right-->
        <?php the_excerpt() ?>
        </div><!--/box-in-->
      <!-- End The Loop -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
      </div><!-- /.span4-->
<!--END COLUMN 1 -->
<!-- COLUMN 2 -->
      <div class="span4">
      <!-- Start the Loop -->
      <?php $the_query = new WP_Query( array( 'posts_per_page' => 3, 'offset' => 3 ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div id="border-bottom" class="clearfix">
        <h3><?php the_title(); ?></h3>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
          Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?><br>
          <?php the_time('F jS, Y') ?>
        </em></small></p>
        <!--/text-right-->
        <?php the_excerpt() ?>
        </div><!--/border-bottom-->
      <!-- End The Loop -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
      </div><!-- /.span4-->
<!--END COLUMN 2 -->
<!-- COLUMN 3 -->
      <div class="span4">
      <!-- Start the Loop -->
      <?php $the_query = new WP_Query( array( 'posts_per_page' => 3, 'offset' =>6 ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div id="border-bottom" class="clearfix">
        <h3><?php the_title(); ?></h3>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
          Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?><br>
          <?php the_time('F jS, Y') ?>
        </em></small></p>
        <!--/text-right-->
        <?php the_excerpt() ?>
        </div><!--/border-bottom-->
      <!-- End The Loop -->
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
      </div><!-- /.span4-->
<!--END COLUMN 3 -->
    </div><!--/row-fluid-->
    <?php get_footer(); ?>