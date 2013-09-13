    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <!-- This sets the $curauth variable -->
        <?php $curauth = (isset($_GET['display_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
        <h1><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
        <div class="pull-left">
          <?php userphoto($wp_query->get_queried_object()) ?>
        </div><!--/pull-left-->
        <strong>Bio:</strong> <?php echo $curauth->user_description; ?><br>
        <strong>Facebook:</strong> <a href="http://facebook.com/<?php echo $curauth->facebook; ?>" target="_blank"><?php echo $curauth->facebook; ?></a><br>
        <strong>Twitter:</strong> <a href="http://twitter.com/<?php echo $curauth->twitter; ?>" target="_blank"><?php echo $curauth->twitter; ?></a><br>
        <strong>Email:</strong> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>
      </div><!--/span8-->
      <div class="span2">
      </div><!--/span2-->
    </div><!--/row-fluid-->
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <div id="border-bottom">
          <h1><?php echo $curauth->first_name; ?>'s Articles</h1>
        </div><!--/border-bottom-->
        <!-- Start the Loop -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h3><center><?php the_title(); ?></center></h3>
        <table class="table">
          <tr>
            <td>
              <p class="text-left"><small><em>Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></small></em></p>
            </td>
            <td>
              <p class="text-right"><small><em>By: <?php the_author_posts_link() ?><br>
              <?php the_time('F jS, Y') ?></em></small></p>
            </td>
          </tr>
          </tr>
        </table>
        <div id="border-bottom">
          <?php the_content() ?>
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
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>