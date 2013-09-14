    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        <!-- This sets the $curauth variable -->
        <?php $curauth = (isset($_GET['display_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
        <div id="border-bottom">
          <h1><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
        </div><!--/border-bottom-->
        <div class="pull-left" style="padding: 20px 20px 0 0;">
          <?php userphoto($wp_query->get_queried_object()) ?>
        </div><!--/pull-left-->
        <p style="padding: 20px 0 0 0;">
          <strong>Bio:</strong> <?php echo $curauth->user_description; ?><br>
          <strong>Facebook:</strong> <a href="http://facebook.com/<?php echo $curauth->facebook; ?>" target="_blank"><?php echo $curauth->facebook; ?></a><br>
          <strong>Twitter:</strong> <a href="http://twitter.com/<?php echo $curauth->twitter; ?>" target="_blank"><?php echo $curauth->twitter; ?></a><br>
          <strong>Email:</strong> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>
        </p>
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
        <h3><?php the_title(); ?></h3>
        <!--text-right-->
        <p class="text-right"><small><em>
          By: <?php the_author_posts_link() ?><br>
          Column: <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?><br>
          <?php the_time('F jS, Y') ?>
        </em></small></p>
        <!--/text-right-->
        <div id="border-bottom">
          <?php the_excerpt() ?>
        </div><!--/border-bottom-->
        <?php endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        <!-- End The Loop -->
      </div><!-- /.span8-->
      <div id="span2">
      </div><!--/.span2 -->
    </div><!-- /.row-fluid -->
    <?php get_footer(); ?>