<?php
 $title = get_sub_field('title');
 if (have_rows('image_gallery')): ?>

    <?php while(have_rows('image_gallery') ) : the_row();
        $image = get_sub_field('image');
        $images[]=$image;
        
    endwhile; 
endif; 
?>



<section class="carousel">
    <div class="container mx-auto my-20">
        <div class="title-carousel">
            <?php echo $title; ?>
        </div>
        <div class="slick-carousel">
            <?php foreach ($image as $index => $image_item) : ?>

            <div class="hidden duration-700 ease-in-out img-gap" data-carousel-item>
                <div class="carousel-image">
                    <img src="<?php echo $image_item; ?>" class="" alt="...">
                </div>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>


