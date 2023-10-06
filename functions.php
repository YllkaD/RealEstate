<?php 

/*
	==========================================
	Aktivizimi e stylit,tailwindit si dhe fajllit js
	==========================================
*/
function mytheme_script_enqueue() {

    wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/mytheme.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/mytheme.js', array('jquery'));
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), '_S_VERSION' );
    
}
add_action('wp_enqueue_scripts', 'mytheme_script_enqueue');


/*
	==========================================
	Shfaqja e Menus tek Apperance 
	==========================================
*/
function reale_state(){
    add_theme_support( 'menus');
    register_nav_menu( 'primary', 'Primary Nav Menu'); 
    register_nav_menu( 'secondary', 'Secondary Nav Menu');
   
}
add_action( 'init', 'reale_state');


/*
	==========================================
	Pyte nese Folderi ACF eshte
	==========================================
*/
if (file_exists(get_stylesheet_directory() . '/acf-export/acf-data.php')) {
    include_once(get_stylesheet_directory() . '/acf-export/acf-data.php');
}


/*
	==========================================
	--------------
	==========================================
*/










