    <?php
    /* Template Name: Columns */
    get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><center><?php the_title(); ?></center></h1>
          <small><em><?php the_content() ?></em></small>
        <!-- PHP for category pulls -->
        <?php $categories = get_categories();
        foreach ($categories as $cat) {
          if ($cat->category_parent != 0) {
          }
          echo '<a href="'.get_option('home').'/'.'category'.'/'.$cat->category_nicename.'/">'.$cat->cat_name.'</a>';
          if ($cat->category_description != '') {
            echo ' <br> '.$cat->category_description;
            echo ' <br> ';
          }
          echo '<br />';
        }
        ?>
        <!--/PHP for category -->
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