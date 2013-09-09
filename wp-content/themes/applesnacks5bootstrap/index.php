<?php get_header(); ?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div class="hero-unit">
  <h1>Friday, <?php echo get_the_date(); ?></h1>
</div>
<!-- Start The Loop -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <!-- Example row of columns -->
  <div class="row">
    <div class="span4">
      <!-- Category -->
      <h2><?php $category = get_the_category(); if($category[0]){echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>'; } ?></h2>
      <!-- End Category-->
      <!-- Title -->
      <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <!-- End Title -->
      <!-- Excerpt -->
      <p><?php the_excerpt() ?></p>
      <!-- End Excerpt -->
    </div><!--end span4 -->
  </div><!-- end row -->
<!-- End The Loop -->
<?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>