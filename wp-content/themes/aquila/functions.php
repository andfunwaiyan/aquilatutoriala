<?php

/**
 * Theme Functions
 * 
 * @package aquila
 */



 function aquila_enqueue_scripts(){
    // Add style.css and main.js into all pages.
    wp_enqueue_style('style',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
    wp_enqueue_script('main-js',get_template_directory_uri().'/assets/js/main.js',[],filemtime(get_template_directory_uri().'/assets/js/main.js'),true);

    // First prepare the archive.css 
    wp_register_style('archive',get_template_directory_uri().'/assets/css/archive.css',['style'],filemtime(get_template_directory_uri().'/assets/css/archive.css'),'all');
    // Add archive.css into only archive page.
    if(is_archive()){
        wp_enqueue_style('archive');
    }
 }

 add_action('wp_enqueue_scripts','aquila_enqueue_scripts');

?>