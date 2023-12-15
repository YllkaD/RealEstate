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





 function my_acf_google_map_api( $api ){
            $api['key'] = 'AIzaSyAz5-j_OXF1whAsbYA3oiqumQuJPhnnvak';
            return $api;
        }
 add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');




 function enqueue_jquery() {
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_jquery');


function aquila_pagination() {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    
    $args = array(
        'before_page_number' => '<span class="page-number flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-300 bg-white border border-e-0 border-gray-100 rounded-lg dark:text-gray-400 dark:hover:bg-gray-300 dark:hover:text-white">',
        'after_page_number'  => '</span>',
        'mid_size'           => 1,
    );

    printf('<nav class="flex items-center" aria-label="Pagination">%s</nav>', paginate_links($args));
    ?>
    <script>
        jQuery(document).ready(function($) {
            var currentPage = <?php echo json_encode($paged); ?>;

            $('.page-number').on('click', function() {
                $('.page-number').removeClass('active');
                $(this).addClass('active');
            });

            $('.page-number').filter(function() {
                return $(this).text() == currentPage;
            }).addClass('active');
        });
    </script>
    <?php
}


 ?>
