<?php
add_filter('show_admin_bar', '__return_false');


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