<?php 
// ADD BOOTSTRAP JQUERY
function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

//ADD TO AUTHORS PAGE
function contributors() {
global $wpdb;

$authors = $wpdb->get_results("SELECT ID, user_nicename from $wpdb->users WHERE display_name <> 'admin' ORDER BY display_name");

foreach ($authors as $author ) {

echo "<li>";
echo "<a href=\"".get_bloginfo('url')."/author/";
the_author_meta('user_nicename', $author->ID);
echo "/\">";
echo userphoto($author->ID);
echo "</a>";
echo '<div>';
echo "<a class='authorlist' href=\"".get_bloginfo('url')."/author/";
the_author_meta('user_nicename', $author->ID);
echo "/\">";
the_author_meta('display_name', $author->ID);
echo "</a>";
echo "<br />";
the_author_meta('description', $author->ID);
echo "<br />";
echo "<br />";
echo "Facebook: <a href=\"http://facebook.com/";
the_author_meta('facebook', $author->ID);
echo "\" target='_blank'>";
the_author_meta('facebook', $author->ID);
echo "</a>";
echo "<br />";
echo "Twitter: <a href=\"http://twitter.com/";
the_author_meta('twitter', $author->ID);
echo "\" target='_blank'>";
the_author_meta('twitter', $author->ID);
echo "</a>";
echo "<br />";
echo "Email: <a href=\"mailto:";
the_author_meta('user_email', $author->ID);
echo "\" target='_blank'>";
the_author_meta('user_email', $author->ID);
echo "</a>";
echo "<br />";
echo "<a href=\"".get_bloginfo('url')."/author/";
the_author_meta('user_nicename', $author->ID);
echo "/\">Read articles by&nbsp;";
the_author_meta('display_name', $author->ID);
echo "";
echo "</a>";
echo "</div>";
echo "</li>";
}
}

//ADD SOCIAL MEDIA
function my_new_contactmethods( $contactmethods ) {
// Add Twitter
$contactmethods['twitter'] = 'Twitter';
//add Facebook
$contactmethods['facebook'] = 'Facebook';

return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);


//ADD READ MORE LINK
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">read more</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );   

add_filter('the_excerpt', 'do_shortcode');
?>