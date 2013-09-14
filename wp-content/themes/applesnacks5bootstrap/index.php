    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span1">
      </div><!--/span1-->
      <div class="span10">
        <div id="border-bottom" class="clearfix">
          <h1><?php the_title(); ?></h1>
        </div><!--/border-bottom-->
      </div><!--/span9-->
      <div id="span1">
      </div><!--/.span1 -->
    </div><!--/row-fluid-->
    <div class="row-fluid">
      <div class="span4">
        <!-- start the loop -->
        <?php $posts=get_posts('numberposts=3&offset=0'); foreach ($posts as $post) : ?>
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
        <?php endforeach; ?>
        <!-- End The Loop -->
      </div><!-- /.span4-->

      <div class="span4">
        <!-- start the loop -->
        <?php $posts=get_posts('numberposts=3&offset=3'); foreach ($posts as $post) : ?>
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
        <?php endforeach; ?>
        <!-- End The Loop -->
      </div><!-- /.span4-->

      <div class="span4">
        <!-- start the loop -->
        <?php $posts=get_posts('numberposts=3&offset=6'); foreach ($posts as $post) : ?>
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
        <?php endforeach; ?>
        <!-- End The Loop -->
      </div><!-- /.span4-->

    </div><!--/row-fluid-->

    <div class="row-fluid">
      <div class="span12">
        <!-- newer-older links -->
        <div class="pull-left" style="clearfix"><small><em><?php previous_posts_link('&raquo; Newer Snacks') ?></em></small></div>
        <div class="pull-right"><small><em><?php next_posts_link('Older Snacks &laquo;') ?></small></em></div>
        <!--/newer-older links -->
      </div><!--/span12-->
    </div><!--/row-fluid-->
    <?php get_footer(); ?>