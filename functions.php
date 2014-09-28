<?php
	add_filter('show_admin_bar', '__return_false');
	add_filter('pre_get_posts', 'seventhblog_pre_get_posts');

	add_action('after_setup_theme', 'seventhblog_setup');

	function seventhblog_setup() {
		load_theme_textdomain('seventhblog', get_template_directory().'/languages');
	}

	function seventhblog_pre_get_posts($query) {
		if($query->is_search) {
			$query->set('posts_per_page', 100);
		}
		return $query;
	}

	if(function_exists('register_sidebar')) {
		$args = array(
		'name'          => __( 'Main Sidebar', 'seventhblog' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="%2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>' );
		register_sidebar($args);
	}