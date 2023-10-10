<?php
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
        <div class="apartment">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('description'); ?></p>
            <p>Bedrooms: <?php the_field('bedrooms'); ?></p>
            <p>Bathrooms: <?php the_field('bathrooms'); ?></p>
            <p>Pet Policy: <?php the_field('pet_policy'); ?></p>
            <p>Furnished: <?php the_field('furnished'); ?></p>

            <h2>Features</h2>
            <ul>
                <?php
                $features = get_field('features');
                if ($features) {
                    foreach ($features as $feature) {
                        echo '<li>' . $feature . '</li>';
                    }
                }
                ?>
            </ul>

            <h2>Gallery</h2>
            <?php
            $gallery = get_field('gallery');
            if ($gallery) {
                echo '<div class="gallery">';
                foreach ($gallery as $image) {
                    echo '<img src="' . $image['sizes']['medium'] . '" alt="' . $image['alt'] . '" />';
                }
                echo '</div>';
            }
            ?>
        </div>
<?php
    }
}

get_footer();
?>
