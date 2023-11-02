<?php 

function mytheme_script_enqueue() {
    wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/mytheme.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/mytheme.js', array('jquery'));
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), '_S_VERSION' );

}
add_action('wp_enqueue_scripts', 'mytheme_script_enqueue');




function reale_state(){
    add_theme_support( 'menus');
    register_nav_menu( 'primary', 'Primary Nav Menu'); 
    register_nav_menu( 'secondary', 'Secondary Nav Menu');
	register_nav_menu('third','Footer Nav Menu');
    register_nav_menu('fourth','Footer Right');
}

add_action( 'init', 'reale_state');

if (file_exists(get_stylesheet_directory() . '/acf-export/acf-data.php')) {
    include_once(get_stylesheet_directory() . '/acf-export/acf-data.php');
}


/*
	==========================================
	--------------
	==========================================
*/
 
if ( file_exists( get_template_directory() . '/include/apartment-functions.php' ) ) {
    include_once get_template_directory() . '/include/apartment-functions.php';
}
		
if ( file_exists( get_template_directory() . '/include/taxonomies.php' ) ) {
    include_once get_template_directory() . '/include/taxonomies.php';
}

add_theme_support( 'post-thumbnails' );


function custom_search_result($query){
    if ($query->is_main_query() && !is_admin() && $query->is_search()) {
       $query->set('post_type', array('apartment'));
       $query->set('posts_per_page', 3);
    }

}
add_action('pre_get_posts','custom_search_result');