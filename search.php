<?php get_header(); ?>

<div class="container mx-auto p-4">

    <h1 class="text-3xl font-bold mb-8">Search Results for '<?php echo get_search_query(); ?>'</h1>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <div class="bg-white rounded-lg p-4 shadow-md">
                    <?php
                    // Check if the post has a featured image (post thumbnail)
                    if (has_post_thumbnail()) {
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-auto mb-4']);
                            ?>
                        </a>
                        <?php
                    }
                    
                    $gallery[]=$gallery;
                    $gallery = get_field('gallery');
                    

                    
                    ?>
                    
                    <img src="<?php echo $gallery; ?>" alt="<?php echo $gallery; ?>" class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer" >

                    <h2 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php
                    // Retrieve the label for the "Bedrooms" ACF field dynamically
                    $bedrooms_field = get_field_object('bedrooms');
                    $bedrooms_label = $bedrooms_field['label'];

                    // Output the label and value
                    ?>
                    <p class="text-gray-700"><?php echo esc_html($bedrooms_label); ?>: <?php echo get_post_meta(get_the_ID(), 'bedrooms', true); ?></p>

                    <p class="text-gray-700">Location: <?php echo get_post_meta(get_the_ID(), 'location', true); ?></p>
                    <p class="text-gray-700">Bathrooms: <?php echo get_post_meta(get_the_ID(), 'bathrooms', true); ?></p>
                    <p class="text-gray-700">
                        <?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = ' ...'); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="mt-4 block text-blue-500">Book Now</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-lg mt-8">No results found. Please try another search term.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>
