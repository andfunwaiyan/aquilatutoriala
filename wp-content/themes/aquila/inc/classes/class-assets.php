<?php

 

 namespace AQUILA_THEME\Inc;

 use AQUILA_THEME\Inc\Traits\Singleton;

 class Assets{

    use Singleton;

    protected function __construct() {
        
        $this->setup_hooks();
    }

    protected function setup_hooks() {

        //actions
        add_action('wp_enqueue_scripts',[$this,'aquila_enqueue_scripts']);
    }

    public function aquila_enqueue_scripts(){
        // Add style.css and main.js into all pages.
        wp_enqueue_style('style',get_stylesheet_uri(),['bootstrap'],filemtime(get_template_directory().'/style.css'),'all');
        wp_enqueue_script('main-js',AQUILA_DIR_URI.'/assets/js/main.js',['bootstrap-script'],filemtime(AQUILA_DIR_PATH.'/assets/js/main.js'),true);

        // Bootstrap style and script
        wp_enqueue_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',[],false,'all');
        wp_enqueue_script('bootstrap-script','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js',['jquery'],false,true);

        // First prepare the archive.css 
        wp_register_style('archive',AQUILA_DIR_URI.'/assets/css/archive.css',['style'],filemtime(AQUILA_DIR_PATH.'/assets/css/archive.css'),'all');
        // Add archive.css into only archive page.
        if(is_archive()){
            wp_enqueue_style('archive');
        }
     }
 }

?>