<?php
/*
Template Name: Apartment Template
*/
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

            // Display the gallery
            $gallery_images = get_post_meta(get_the_ID(), '_apartment_gallery', true);

            if (!empty($gallery_images)) {
                $images = explode(',', $gallery_images);
                echo '<div id="gallery">';
                foreach ($images as $image) {
                    echo '<div class="gallery-image"><img src="' . esc_url($image) . '" alt="" /></div>';
                }
                echo '</div>';
            }

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        // End the loop.
        endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
