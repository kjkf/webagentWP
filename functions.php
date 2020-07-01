<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'after_setup_theme', 'theme_register_nav_menu' );


function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}

function style_theme() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css');
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.min.css');
}

function scripts_theme() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/index.js', [jquery], null, true);
}


?>