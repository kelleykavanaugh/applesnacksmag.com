    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span3">
      </div>
      <div class="span6">
        <h1>Recently Posted Snacks</h1>
      <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h3><center><?php the_title(); ?></center></h3>
      <table class="table-condensed">
        <tr>
          <td>
        <p class="text-left"><small><em>From Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></small></em></p>
          </td>
          <td>
        <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
          </td>
        </tr>
      </table>
                <?php the_excerpt() ?>
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
      <!-- End The Loop -->
      </div><!-- /.span6-->
      <div id="span3">
      </div><!--/.span3 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>