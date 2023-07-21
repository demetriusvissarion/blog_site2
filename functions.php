<?php

function blog_site2_theme_support()
{
	// This adds dynamic title tag support
	add_theme_support('title-tag');

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');
};

add_action('after_setup_theme', 'blog_site2_theme_support');

function blog_site2_menus()
{
	$locations = array(
		'primary' => "Desktop Primary Left Sidebar",
		'footer' => "Footer menu Items"
	);

	register_nav_menus($locations);
}

add_action('init', 'blog_site2_menus');

function blog_site2_register_styles()
{
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('blog_site2-style', get_template_directory_uri() . "/assets/css/style.css", array('blog_site2-bootstrap'), $version, 'all');
	wp_enqueue_style('blog_site2-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_style('blog_site2-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
};

add_action('wp_enqueue_scripts', 'blog_site2_register_styles');


function blog_site2_register_scripts()
{
	wp_enqueue_script('blog_site2-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
	wp_enqueue_script('blog_site2-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
	wp_enqueue_script('blog_site2-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true);
	wp_enqueue_script('blog_site2-main', get_template_directory_uri() . "/wp-content/themes/blog_site2/assets/js/main.js", array(), '1.0', true);
};

add_action('wp_enqueue_scripts', 'blog_site2_register_scripts');
