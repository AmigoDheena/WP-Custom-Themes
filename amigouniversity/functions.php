<?php
function css_js(){
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('build-style',get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('build-index',get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('style',get_stylesheet_uri());    
    
    wp_enqueue_script('index-js',get_template_directory_uri().'/build/index.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts','css_js');

add_theme_support( 'title-tag' );
?>