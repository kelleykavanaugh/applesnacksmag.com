    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <div id="border-bottom">
          <h1><?php the_title(); ?></h1>
        </div><!--/border-bottom-->
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="border-bottom">
          <?php the_content() ?>
        </div><!--/border-bottom-->
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <!-- End The Loop -->
        <!-- newer-older links -->
        <div class="pull-left"><small><em><?php previous_posts_link('&raquo; Newer Snacks') ?></em></small></div>
        <div class="pull-right"><small><em><?php next_posts_link('Older Snacks &laquo;') ?></small></em></div>
        <!--/newer-older links -->
      </div><!-- /.span8-->
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>