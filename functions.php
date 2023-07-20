<?php

function blog_site2_register_styles() {
	wp_enqueue_style('blog_site2-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
};

add_action('wp_enqueue_scripts', 'blog_site2_register_styles');

?>
