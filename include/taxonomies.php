<?php 
         
    // Register Apartment Type Taxonomy
    function register_apartment_type_taxonomy() {
        $labels = array(
            'name' => 'Apartment Types',
            'singular_name' => 'Apartment Type',
            'menu_name' => 'Apartment Type',
            'all_items' => 'All Apartment Types',
            'edit_item' => 'Edit Apartment Type',
            'view_item' => 'View Apartment Type',
            'add_new_item' => 'Add New Apartment Type',
            'new_item_name' => 'New Apartment Type Name',
            'search_items' => 'Search Apartment Types',
            'popular_items' => 'Popular Apartment Types',
            'separate_items_with_commas' => 'Separate apartment types with commas',
            'add_or_remove_items' => 'Add or remove apartment types',
            'choose_from_most_used' => 'Choose from the most used apartment types',
            'not_found' => 'No apartment types found',
            'not_found_in_trash' => 'No apartment types found in Trash',
            'parent_item' => 'Parent Apartment Type',
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true, // Set to true if you want it to behave like categories, false for tags
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'apartment-type'), // Customize the slug if needed
        );
    
        register_taxonomy('apartment_type', 'apartment', $args);
    }
    
    add_action('init', 'register_apartment_type_taxonomy');
    
    // Register Availability Status Taxonomy
    function register_availability_status_taxonomy() {
        $labels = array(
            'name' => 'Availability Statuses',
            'singular_name' => 'Availability Status',
            'menu_name' => 'Availability Status',
            'all_items' => 'All Availability Statuses',
            'edit_item' => 'Edit Availability Status',
            'view_item' => 'View Availability Status',
            'add_new_item' => 'Add New Availability Status',
            'new_item_name' => 'New Availability Status Name',
            'search_items' => 'Search Availability Statuses',
            'popular_items' => 'Popular Availability Statuses',
            'separate_items_with_commas' => 'Separate availability statuses with commas',
            'add_or_remove_items' => 'Add or remove availability statuses',
            'choose_from_most_used' => 'Choose from the most used availability statuses',
            'not_found' => 'No availability statuses found',
            'not_found_in_trash' => 'No availability statuses found in Trash',
            'parent_item' => 'Parent Availability Status',
        );
    
        $args = array(
            'labels' => $labels,
            'public' => true,
            'hierarchical' => true, // Set to true if you want it to behave like categories, false for tags
            'show_in_nav_menus' => true,
            'show_admin_column' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'availability-status'), // Customize the slug if needed
        );
    
        register_taxonomy('availability_status', 'apartment', $args);
    }
    
    add_action('init', 'register_availability_status_taxonomy');

    // Register Nearby Attractions Taxonomy
function register_nearby_attractions_taxonomy() {
    $labels = array(
        'name' => 'Nearby Attractions',
        'singular_name' => 'Nearby Attraction',
        'menu_name' => 'Nearby Attractions',
        'all_items' => 'All Nearby Attractions',
        'edit_item' => 'Edit Nearby Attraction',
        'view_item' => 'View Nearby Attraction',
        'add_new_item' => 'Add New Nearby Attraction',
        'new_item_name' => 'New Nearby Attraction Name',
        'search_items' => 'Search Nearby Attractions',
        'popular_items' => 'Popular Nearby Attractions',
        'separate_items_with_commas' => 'Separate nearby attractions with commas',
        'add_or_remove_items' => 'Add or remove nearby attractions',
        'choose_from_most_used' => 'Choose from the most used nearby attractions',
        'not_found' => 'No nearby attractions found',
        'not_found_in_trash' => 'No nearby attractions found in Trash',
        'parent_item' => 'Parent Nearby Attraction',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => false, // Set to false if you don't want it to behave like categories
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'nearby-attractions'), // Customize the slug if needed
    );

    register_taxonomy('nearby_attractions', 'apartment', $args);
}

add_action('init', 'register_nearby_attractions_taxonomy');

    
?>