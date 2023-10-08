<?php 

// Enqueue Scripts and Styles
function mytheme_script_enqueue() {
    wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/mytheme.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/mytheme.js', array(), '1.0.0', true );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom-script.js', array(), '1.0.0', true );
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), '_S_VERSION' );
}

add_action('wp_enqueue_scripts', 'mytheme_script_enqueue');

// Register Navigation Menus
function reale_state(){
    add_theme_support( 'menus');
    register_nav_menu( 'primary', 'Primary Nav Menu'); 
    register_nav_menu( 'secondary', 'Secondary Nav Menu');
}

add_action( 'init', 'reale_state');

// Include ACF Data (if exists)
if (file_exists(get_stylesheet_directory() . '/acf-export/acf-data.php')) {
    include_once(get_stylesheet_directory() . '/acf-export/acf-data.php');
}

// Custom Post Type - Apartments
function create_apartments_post_type() {
    $labels = array(
        'name'               => _x( 'Apartments', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Apartment', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Apartments', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Apartment', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'apartment', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Apartment', 'your-text-domain' ),
        'new_item'           => __( 'New Apartment', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Apartment', 'your-text-domain' ),
        'view_item'          => __( 'View Apartment', 'your-text-domain' ),
        'all_items'          => __( 'All Apartments', 'your-text-domain' ),
        'search_items'       => __( 'Search Apartments', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Apartments:', 'your-text-domain' ),
        'not_found'          => __( 'No apartments found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No apartments found in Trash.', 'your-text-domain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'apartments' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    );

    register_post_type( 'apartment', $args );
}

add_action( 'init', 'create_apartments_post_type' );

// Add Metabox for Apartment Gallery
function add_apartment_gallery_meta_box() {
    add_meta_box(
        'apartment_gallery',
        'Apartment Gallery',
        'render_apartment_gallery_meta_box',
        'apartment',
        'normal',
        'high'
    );
}

function render_apartment_gallery_meta_box($post) {
    wp_nonce_field(basename(__FILE__), 'apartment_gallery_nonce');

    $gallery_images = get_post_meta($post->ID, '_apartment_gallery', true);

    echo '<label for="apartment_gallery">Gallery:</label>';
    echo '<input type="hidden" name="apartment_gallery" id="apartment_gallery" value="' . esc_attr($gallery_images) . '" />';
    echo '<div id="image-container">';

    if (!empty($gallery_images)) {
        $images = explode(',', $gallery_images);
        foreach ($images as $image) {
            echo '<div class="gallery-image"><img src="' . esc_url($image) . '" alt="" /><a href="#" class="remove-image">Remove</a></div>';
        }
    }

    echo '</div>';
    echo '<input type="button" id="upload-button" class="button" value="Upload Image" />';
}

add_action('add_meta_boxes', 'add_apartment_gallery_meta_box');

function save_apartment_gallery($post_id) {
    if (isset($_POST['apartment_gallery'])) {
        $gallery_images = sanitize_text_field($_POST['apartment_gallery']);
        update_post_meta($post_id, '_apartment_gallery', $gallery_images);
    }
}

add_action('save_post', 'save_apartment_gallery');

// Custom Post Type - Houses
function custom_register_house_post_type() {
    $labels = array(
        'name' => 'Houses',
        'singular_name' => 'House',
        'menu_name' => 'Houses',
        'all_items' => 'All Houses',
        'add_new_item' => 'Add New House',
        'edit_item' => 'Edit House',
        'new_item' => 'New House',
        'view_item' => 'View House',
        'search_items' => 'Search Houses',
        'not_found' => 'No houses found',
        'not_found_in_trash' => 'No houses found in Trash'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-home', // Icon for the menu
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );

    register_post_type('house', $args);
}

add_action('init', 'custom_register_house_post_type');

function custom_add_gallery_metabox() {
    add_meta_box(
        'house_gallery_metabox',
        'House Gallery',
        'custom_render_gallery_metabox',
        'house',
        'normal',
        'default'
    );
}

function custom_render_gallery_metabox($post) {
    $gallery_images = get_post_meta($post->ID, '_house_gallery', true);
    ?>

    <div class="custom-gallery">
        <ul class="gallery-images">
            <?php if (!empty($gallery_images)) : ?>
                <?php foreach ($gallery_images as $image) : ?>
                    <li>
                        <img src="<?php echo esc_attr($image); ?>" alt="">
                        <input type="hidden" name="house_gallery[]" value="<?php echo esc_attr($image); ?>">
                        <button class="remove-image">Remove</button>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
        <input type="button" class="button button-secondary add-gallery-image" value="Add Image">
    </div>

    <script>
        jQuery(document).ready(function($) {
            var custom_uploader;

            $('.add-gallery-image').click(function(e) {
                e.preventDefault();

                if (custom_uploader) {
                    custom_uploader.open();
                    return;
                }

                custom_uploader = wp.media.frames.file_frame = wp.media({
                    title: 'Choose Images',
                    button: {
                        text: 'Choose Images'
                    },
                    multiple: true
                });

                custom_uploader.on('select', function() {
                    var attachments = custom_uploader.state().get('selection').toJSON();
                    var galleryContainer = $('.gallery-images');

                    attachments.forEach(function(attachment) {
                        var imageHTML = '<li><img src="' + attachment.url + '" alt=""><input type="hidden" name="house_gallery[]" value="' + attachment.url + '"><button class="remove-image">Remove</button></li>';
                        galleryContainer.append(imageHTML);
                    });
                });

                custom_uploader.open();
            });

            $('body').on('click', '.remove-image', function() {
                $(this).parent('li').remove();
            });
        });
    </script>

    <?php
}

add_action('save_post', 'custom_save_gallery_images');

function custom_save_gallery_images($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['house_gallery'])) {
        update_post_meta($post_id, '_house_gallery', $_POST['house_gallery']);
    }
}

