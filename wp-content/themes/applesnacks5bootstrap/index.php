    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div>
      <div class="span8">
      <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content() ?>
        <p class="text-right"><small><em>By: <?php the_author_posts_link() ?></em></small></p>
      </div><!--/.span12 -->
      <div class="span2">
      </div>
    </div><!--/.row-fluid -->
    <div class="row-fluid">
      <div class="span3">
      </div>
      <div class="span6">
      <h1><center><?php the_title(); ?></center></h1>
      <!-- PHP for category pulls -->
        <?php $categories = get_categories();
        foreach ($categories as $cat) {
          if ($cat->category_parent != 0) {
            echo '<span style="padding-left:10px;">';
          }
          echo '<a href="'.get_option('home').'/'.'category'.'/'.$cat->category_nicename.'/">'.$cat->cat_name.'</a>';
          if ($cat->category_description != '') {
            echo ' <br> '.$cat->category_description;
            echo ' <br> ';
          }
          echo '<br />';
        }
        ?>
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
      <!-- End The Loop -->
      </div><!-- /.span6-->
      <div id="span3">
      </div><!--/.span3 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>