    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span3">
      </div>
      <div class="span6">
        <div id="border-bottom">
          <h1><?php the_title(); ?></h1>
        </div><!--/border-bottom-->
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3><center><?php the_title(); ?></center></h3>        <!--text-right-->
        <p style="margin: 0px 0px 0px 0px;" class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
          Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?><br>
          <?php the_time('F jS, Y') ?>
        </em></small></p>
        <!--/text-right-->
        <div id="border-bottom">
          <?php the_excerpt() ?>
        </div><!--/border-bottom-->
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <!-- End The Loop -->
        <div class="pull-left"><small><em><?php previous_posts_link('&raquo; Newer Snacks') ?></em></small>
        </div>
        <div class="pull-right"><small><em><?php next_posts_link('Older Snacks &laquo;') ?></small></em>
        </div>
      </div><!-- /.span6-->
      <div id="span3">
      </div><!--/.span3 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>