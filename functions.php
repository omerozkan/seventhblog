	<?php
add_filter('show_admin_bar', '__return_false');
add_action('after_setup_theme', 'seventhblog_setup');

function seventhblog_setup() {
	load_theme_textdomain('seventhblog', get_template_directory().'/languages');
}

if(function_exists('register_sidebar'))
{
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