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





function custom_search_result($query) {
    global $apartment_type;

    $apartment_type = get_terms(array(
        'taxonomy' => 'apartment_type',
        'hide_empty' => false, // Set to true if you want to hide empty terms
    ));

    if ($query->is_main_query() && !is_admin() && $query->is_search()) {
        $query->set('post_type', array('apartment'));
        $query->set('posts_per_page', 9);

        // Check for price filter in the URL parameters
        $price_filter = isset($_GET['price-filter']) ? $_GET['price-filter'] : '';

        // Check for apartment type filter in the URL parameters
        $apartment_type_filter = isset($_GET['apartment-type']) ? $_GET['apartment-type'] : '';

        // Debug statements
        error_log('Price Filter: ' . $price_filter);
        error_log('Apartment Type Filter: ' . $apartment_type_filter);

        // Modify the query based on the selected price filter
        if ($price_filter === 'high') {
            $query->set('orderby', 'meta_value_num');
            $query->set('meta_key', 'price'); // Change 'price' to your actual custom field name for price
            $query->set('order', 'DESC');
        } elseif ($price_filter === 'low') {
            $query->set('orderby', 'meta_value_num');
            $query->set('meta_key', 'price'); // Change 'price' to your actual custom field name for price
            $query->set('order', 'ASC');
        } elseif ($price_filter === 'new') {
            // Implement logic for handling "New Listing"
            // You might want to order by the publication date or any other criteria for new listings
            $query->set('orderby', 'date');
            $query->set('order', 'DESC');
        }

        // Modify the query based on the selected apartment type filter
        if ($apartment_type_filter) {
            $query->set('tax_query', array(
                array(
                    'taxonomy' => 'apartment_type',
                    'field' => 'slug', // Use 'slug' or 'name' depending on your URL parameters
                    'terms' => $apartment_type_filter,
                ),
            ));
        }
    }
}

add_action('pre_get_posts', 'custom_search_result');





 function my_acf_google_map_api( $api ){
            $api['key'] = 'AIzaSyAz5-j_OXF1whAsbYA3oiqumQuJPhnnvak';
            return $api;
        }
 add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');




 function enqueue_jquery() {
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'enqueue_jquery');

function create_agent_role() {
    $agent_caps = array(
        'read' => true,
        'edit_posts' => true,
        'publish_posts' => true,
        'upload_files' => true,
        'edit_dashboard' => true,
        'read_dashboard' => true,
        'manage_options' => true, // Access to some settings
        // Add more capabilities as needed...
    );

    add_role('agent', 'Agent', $agent_caps); // Create 'agent' role with specified capabilities
}
add_action('init', 'create_agent_role');
function aquila_pagination() {
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    
    $args = array(
        'before_page_number' => '<span class="page-number flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-100 rounded-lg hover:bg-gray-300 hover:text-gray-800 d dark:text-gray-400 dark:hover:text-white">',
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
