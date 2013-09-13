    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
          Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?><br>
          <?php the_time('F jS, Y') ?>
        </em></small></p>
        <!--/text-right-->
          <?php the_content() ?>
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <!-- End The Loop -->
        <table class="table">
          <tr>
            <td>
              <p class="text-left"><small><em><?php previous_posts_link('&raquo; Newer Snacks') ?></em></small></p>
            </td>
            <td>
              <p class="text-right"><small><em><?php next_posts_link('Older Snacks &laquo;') ?></small></em></p>
            </td>
          </tr>
        </table>
      </div><!-- /.spa86-->
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>