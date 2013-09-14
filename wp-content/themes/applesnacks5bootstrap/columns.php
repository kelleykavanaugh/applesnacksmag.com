    <?php /* Template Name: Columns */ get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <div id="border-bottom">
          <h1><?php the_title(); ?></h1>
          <!-- Start the Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        </div><!--/border-bottom-->
          <small><em><?php the_content() ?></em></small>
        <!-- PHP for category pulls -->
        <?php $categories = get_categories();
        foreach ($categories as $cat) {
          if ($cat->category_parent != 0) {
          }
          echo '<h3><a href="'.get_option('home').'/'.'category'.'/'.$cat->category_nicename.'/">'.$cat->cat_name.'</a>';
          if ($cat->category_description != '') {
            echo ' : <em>'.$cat->category_description;
            echo ' </em><br></h3> ';
          }
          echo '<br />';
        }
        ?>
        <!--/PHP for category -->
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <!-- End The Loop -->
      </div><!-- /.span8-->
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>