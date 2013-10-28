<?php get_header(); ?>

<!-- This sets the $curauth variable -->
	<?php $curauth = (isset($_GET['display_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
	<div id="single-title"><?php echo $curauth->first_name; ?> <?php echo $curauth->last_name; ?></div>
	<div id="userphoto"><?php userphoto($wp_query->get_queried_object()) ?></div><!-- END Userphoto-->
	<li><strong>Bio:</strong> <?php echo $curauth->user_description; ?><br>
	<li><strong>Facebook:</strong> <a href="http://facebook.com/<?php echo $curauth->facebook; ?>" target="_blank"><?php echo $curauth->facebook; ?></a>
<br>
	<li><strong>Twitter:</strong> <a href="http://twitter.com/<?php echo $curauth->twitter; ?>" target="_blank"><?php echo $curauth->twitter; ?></a><br>
	<li><strong>Email:</strong> <a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a><br>

	<li><strong>Columns:</strong> 
	<?php $author = get_query_var('author');
	$categories = $wpdb->get_results("
		SELECT DISTINCT(terms.term_id) as ID, terms.name, terms.slug, tax.description
		FROM $wpdb->posts as posts
		LEFT JOIN $wpdb->term_relationships as relationships ON posts.ID = relationships.object_ID
		LEFT JOIN $wpdb->term_taxonomy as tax ON relationships.term_taxonomy_id = tax.term_taxonomy_id
		LEFT JOIN $wpdb->terms as terms ON tax.term_id = terms.term_id
		WHERE 1=1 AND (
			posts.post_status = 'publish' AND
			posts.post_author = '$author' AND
			tax.taxonomy = 'category' )
		ORDER BY terms.name ASC
	"); ?>
	<ul>
		<?php foreach($categories as $category) : ?>
		<li>
			<a href="<?php echo get_category_link( $category->ID ); ?>" title="<?php echo $category->name ?>">
			<?php echo $category->name ?>
		</a>
			<i><?php echo $category->description ?></i>
		</li>
		<?php endforeach; ?>
	</ul>





    <div id="author-title"><?php echo $curauth->first_name; ?>'s Articles</div>

		<! -- Start the Loop -->
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        		
            	<div id="title"><?php the_title(); ?></div>
                <div class="alignright"><em>By</em>: <strong><?php the_author_posts_link(); ?></strong></div>
                <div class="date"><?php the_date(); ?></div>
                <hr />
                
                <?php the_content(); ?>
                
                <?php endwhile; else: ?>
				<p>Whoops! It looks like this author hasn't written any articles yet.</p>
				<?php endif; ?>            

        <?php get_footer(); ?>