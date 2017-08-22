<?php

function theme_name_scripts() {
    wp_enqueue_script( 'jquery-3.2.1', get_template_directory_uri() . '/js/jquery-3.2.1.js');
    wp_enqueue_script( 'jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js');
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js');
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css');
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css');
    wp_enqueue_style( 'jquery.bxslider', get_template_directory_uri() . '/css/jquery.bxslider.css');
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );



add_theme_support( 'post-thumbnails', array( 'post' ) );


register_nav_menu('menu',  'меню в шапке');

$args = array (
    'name' => 'Виджет sidebar',
    'id'   => 'sidebar',
    'description' => 'Здесь добавляем виджеты сайдебара',
    'before_widget' => '<li id="%1" class=""widget %2',
    'after_widget' => '</li>',
    'before_title' => '<h2 class="main-title">',
    'after_title' => '</h2>'
    

);

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

register_sidebar($args);

?>











