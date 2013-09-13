    <?php /* Template Name: Columns */ get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <div id="border-bottom">
          <h1><?php the_title(); ?></h1>
        </div><!--/border-bottom-->
        <!-- Start the Loop -->
          <small><em><?php the_content() ?></em></small>
        <div id="border-bottom">
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
      </div><!--/border-bottom-->
      </div><!-- /.span8-->
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>