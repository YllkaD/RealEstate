<?php  
if (have_rows('image_module')): ?>

    <?php while(have_rows('image_module') ) : the_row();
    
        $image = get_sub_field('image');
        
        ?>
    <?php endwhile; ?>
<?php endif; ?>



<section class="conatiner mx-auto my-24">
        <div class="flex justify-center items-center">
            <img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer" >
        </div>
</section>



