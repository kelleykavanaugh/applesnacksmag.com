    <?php get_header(); ?>
    <div class="row-fluid">
      <div class="span2">
      </div><!--/span2-->
      <div class="span8">
        
<!-- This sets the $curauth variable -->
  <?php $curauth = (isset($_GET['display_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
  <h1><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></h1>
  <div class="pull-left"><?php userphoto($wp_query->get_queried_object()) ?></div><!-- END Userphoto-->
  <li><strong>Bio:</strong> <?php echo $curauth->user_description; ?><br>
  <li><strong>Facebook:</strong> <a href="http://facebook.com/<?php echo $curauth->facebook; ?>" target="_blank"><?php echo $curauth->facebook; ?></a>
<br>
  <li><strong>Twitter:</strong> <a href="http://twitter.com/<?php echo $curauth->twitter; ?>" target="_blank"><?php echo $curauth->twitter; ?></a><br>
  <li><strong>Email:</strong> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>


  </ul>





    <div id="author-title"><?php echo $curauth->first_name; ?>'s Articles</div>

  <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <!-- Box In -->
    <div id="box-in">
  <!-- Category -->
    <div id="category">
    <?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?>
  <!-- End Category--></div>
  <!-- Title -->
    <div id=title>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </div><!-- End Title -->
  <!--Author -->
    <div id="author">
       By: <?php the_author_posts_link() ?>
  <!--End Author --></div>
  <!-- Excerpt -->
    <div id="excerpt">
    <?php the_excerpt() ?>
  <!-- End Excerpt--></div>
  <!--End Box In--></div>
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