<?php
namespace Letterform;

function theme_setup()
{
	
}
add_action('after_setup_theme', 'Letterform\theme_setup');

function enqueue_scripts()
{
	$theme_uri = get_template_directory_uri();
	
	wp_register_style('oswald-font', 'http://fonts.googleapis.com/css?family=Oswald');
	
	wp_register_style('letterform', $theme_uri .'/style.css', ['oswald-font']);
	wp_enqueue_style('letterform');
}
add_action('wp_enqueue_scripts', 'Letterform\enqueue_scripts');

?>