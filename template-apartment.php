<?php
/*
Template Name: Apartment Template
*/


get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );

            
        
            
            $gallery_images = get_field('gallery');

            if ($gallery_images) {
                echo '<div class="gallery">';
                foreach ($gallery_images as $image_url) {
                    echo '<img src="' . esc_url($image_url) . '" alt="" />';
                }
                echo '</div>';
            }

        endwhile;
        ?>

    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>
