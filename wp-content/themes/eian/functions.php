<?php

/**
 * 
 * Theme Functions
 * 
 * @package  Eian
 */
// echo "<pre>";
// print_r(filemtime(get_template_directory().'/style.css')); // directory to the folder of style.css
// wp_die();

function eian_theme_scripts(){
    // wp_enqueue_style('eian-style', get_template_directory_uri(). 'style.css'); // custom stylesheet directory
    wp_register_style('eian-style',get_stylesheet_uri(),[],filemtime(get_template_directory().'/style.css'),'all');
 
    wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',[],filemtime(get_template_directory().'/assets/main.js'),true);    

    wp_enqueue_style('eian-style');
    wp_enqueue_script('main.js');
}

add_action('wp_enqueue_scripts','eian_theme_scripts');

?>

