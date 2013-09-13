    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span3">
      </div>
      <div class="span6">
        <div id="border-bottom">
          <h1><center><?php the_title(); ?></center></h1>
        </div><!--/border-bottom-->
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3><center><?php the_title(); ?></center></h3>
        <table class="table">
          <tr>
            <td>
              <p class="text-left"><small><em>From Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></small></em></p>
            </td>
            <td>
              <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
            </td>
          </tr>
        </table>
        <div id="border-bottom">
          <?php the_excerpt() ?>
        </div><!--/border-bottom-->
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
      </div><!-- /.span6-->
      <div id="span3">
      </div><!--/.span3 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>