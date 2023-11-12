<?php
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
        <!-- <div class="apartment">
            <h1><?php the_field('title'); ?></h1>
            <p><?php the_field('description'); ?></p>
            <p>Bedrooms: <?php the_field('bedrooms'); ?></p>
            <p>Bathrooms: <?php the_field('bathrooms'); ?></p>
            <p>Pet Policy: <?php the_field('pet_policy'); ?></p>
            <p>Furnished: <?php the_field('furnished'); ?></p>
            <p>Price: <?php the_field('price'); ?> $ </p>
            <p>Area: <?php the_field('area'); ?> sq m</p>

            <h2>Features: </h2>
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

            <h2>Gallery: </h2>
                 <?php
            
                $gallery_images = get_field('gallery');

                if ($gallery_images) {
                    echo '<div class="gallery">';
                    foreach ($gallery_images as $image_url) {
                        echo '<img src="' . esc_url($image_url) . '" alt="" />';
                    }
                    echo '</div>';
                }
                ?>

        </div>
 -->

 








<div class="container mx-auto single-apartment">
<div class="flex">
    <div class="w-1/3 p-4">
    <div class="p-6">
    <?php if (get_field('title')) : ?>
        <div class="text-title"><?php the_field('title'); ?></div>
        <?php if (get_field('price')) : ?>
        <?php
        
        $price = get_field('price');

        $formatted_price = '€' . number_format($price);
        ?>

        <div class="price"><?php echo $formatted_price; ?></div>
        <?php endif; ?>
    <?php endif; ?>

    <?php if (get_field('description')) : ?>
        <div class="text-gray-600 text-sm"><?php the_field('description'); ?></div>
    <?php endif; ?>

    <div class="flex items-center mt-4">
        <div class="w-1/2">
            <?php if (get_field('bedrooms')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Bedrooms:</span> <?php the_field('bedrooms'); ?></div>
            <?php endif; ?>

            <?php if (get_field('bathrooms')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Bathrooms:</span> <?php the_field('bathrooms'); ?></div>
            <?php endif; ?>

            <?php if (get_field('pet_policy')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Pet Policy:</span> <?php the_field('pet_policy'); ?></div>
            <?php endif; ?>

            <?php if (get_field('furnished')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Furnished:</span> <?php the_field('furnished'); ?></div>
            <?php endif; ?>
        </div>
        <div class="w-1/2">
            <?php if (get_field('price')) : ?>
                <div class="text-blue-600 font-semibold text-lg">$<?php the_field('price'); ?> </div>
            <?php endif; ?>

            <?php if (get_field('area')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Area:</span> <?php the_field('area'); ?> m²</div>
            <?php endif; ?>
        </div>
    </div>
</div>
    </div>
    <div class="w-1/2 p-4">
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            
            <!-- image - end -->

            <!-- image - start -->
            
            <!-- image - end -->
        </div>
    </div>
</div>
</div>





<?php
    }
}

get_footer();
?>
<style>
    .single-apartment .text-title{
        font-size: 55px;
    line-height: 55px;
    color: #221f20;
    margin: 0 0 10px;
    font-weight: 400;

    }

    .single-apartment .price{
        font-size: 68px;
    line-height: 68px;
    color: #357ef6;
    letter-spacing: -2px;
    font-weight: 300;
    }
</style>








<div class="container mx-auto py-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md">
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#"
                class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div
                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                </div>

                <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Retro</span>
            </a>
            <!-- image - end -->
        </div>
        <div class="p-6">
    <?php if (get_field('title')) : ?>
        <div class="text-3xl font-semibold"><?php the_field('title'); ?></div>
    <?php endif; ?>

    <?php if (get_field('description')) : ?>
        <div class="text-gray-600 text-sm"><?php the_field('description'); ?></div>
    <?php endif; ?>

    <div class="flex items-center mt-4">
        <div class="w-1/2">
            <?php if (get_field('bedrooms')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Bedrooms:</span> <?php the_field('bedrooms'); ?></div>
            <?php endif; ?>

            <?php if (get_field('bathrooms')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Bathrooms:</span> <?php the_field('bathrooms'); ?></div>
            <?php endif; ?>

            <?php if (get_field('pet_policy')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Pet Policy:</span> <?php the_field('pet_policy'); ?></div>
            <?php endif; ?>

            <?php if (get_field('furnished')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Furnished:</span> <?php the_field('furnished'); ?></div>
            <?php endif; ?>
        </div>
        <div class="w-1/2">
            <?php if (get_field('price')) : ?>
                <div class="text-blue-600 font-semibold text-lg">$<?php the_field('price'); ?> </div>
            <?php endif; ?>

            <?php if (get_field('area')) : ?>
                <div class="text-gray-700 text-sm"><span class="font-semibold">Area:</span> <?php the_field('area'); ?> m²</div>
            <?php endif; ?>
        </div>
    </div>
</div>


    </div>
</div>
