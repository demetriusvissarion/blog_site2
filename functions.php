<?php

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
};

add_action('wp_enqueue_scripts', 'blog_site2_register_scripts');
