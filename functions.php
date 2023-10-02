<?php 

function mytheme_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri().'css/mytheme.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri().'js/mytheme.js', array(), '1.0.0', true );


}

add_action('wp_enqueue_scripts', 'mytheme_script_enqueue');
function mytheme_theme_setup(){
add_theme_support('menus');
}

add_action('init', 'mytheme_theme_setup');