<?php

add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

function enqueue_scripts()
{
	wp_enqueue_script('ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js', array('jquery'));
}

?>