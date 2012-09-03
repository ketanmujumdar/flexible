<?php
include_once 'libs/sidebar.php';
/*
 * Add option pages for adding configuration options
 */
include_once 'option_pages/options.php';


//Add support for WordPress 3.0's custom menus
add_action( 'init', 'register_my_menu' );

//Register area for custom menu
function register_my_menu() {
	register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
}



//Some simple code for our widget-enabled sidebar
$header_inside_sidebar = array(
		'name'          => 'Header Inside Sidebar',
		'id'            => 'header-inside-sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<span>',
		'after_widget'  => '</span>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>' );
sidebar::create_sidebar($header_inside_sidebar);

$primary_sidebar = array(
		'name'          => 'Primary Sidebar',
		'id'            => 'primary-sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li>',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widget_title">',
		'after_title'   => '</h2>' );
sidebar::create_sidebar($primary_sidebar);

$footer_sidebar = array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer-sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '' );
sidebar::create_sidebar($footer_sidebar);




//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);
?>