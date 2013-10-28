<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<div id="outer"><!--outer-->

		<!-- Menu Bar -->
	<div id="menu-bar">
        <ul class="nav">
        	<li><a href="<?php echo get_option('home'); ?>" accesskey="1" <?php if( is_home()) : ?> class="active" <?php endif; ?> title="">Home</a></li>
			<?php
			if( is_page() ) $curpage = $post->ID;
			$pages = get_pages('sort_column=menu_order');
			foreach( $pages as $page ) {
				$this_css = '';
				$this_link = get_page_link($page->ID);
				if( $curpage == $page->ID ) $this_css = ' class="active"';
				echo "<li><a $this_css href=\"$this_link\">" . $page->post_title . "</a></li>\n\t\t";
			} ?>
<div id="tagline">hi! we update every friday.</div>
       		 <!-- END Menu Bar--></ul></div> 
	<div id="container"><!--container-->