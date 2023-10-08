<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_content(); ?>
                </div><!-- .entry-content -->

                <div class="entry-gallery">
                    <?php
                    $gallery_images = get_post_meta(get_the_ID(), '_house_gallery', true);

                    if (!empty($gallery_images)) {
                        foreach ($gallery_images as $image_url) {
                            echo '<img src="' . esc_attr($image_url) . '" alt="">';
                        }
                    }
                    ?>
                </div><!-- .entry-gallery -->

            </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
