
<?php  
if (have_rows('image_gallery')): ?>

    <?php while(have_rows('image_gallery') ) : the_row();

        $image = get_sub_field('image');
        $images[]=$image;
        $title = get_sub_field('title');
        ?>
    <?php endwhile; ?>
<?php endif; ?>


<div class="container mx-auto my-20">
<div id="default-carousel" class="relative w-full" data-carousel="slide">

<h3 class="text-center my-4"><?php echo $title; ?></h3>

   <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
    <?php foreach ($image as $index => $image_item) : ?>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="<?php echo $image_item; ?>" class="absolute block  -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>

    <?php endforeach; ?>
</div>

<!-- Indikatort e fotos -->
<div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
    <?php foreach ($image as $index => $image_item) : ?>
        <button type="button" class="w-3 h-3 rounded-full" aria-label="Slide <?php echo $index + 1; ?>" data-carousel-slide-to="<?php echo $index; ?>"></button>
    <?php endforeach; ?>
</div>
    <!-- Right Left butonat -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
</div>


