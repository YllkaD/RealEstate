<?php
$image = get_sub_field('image');
?>

<section>
        <div class="flex justify-center items-center">
            <img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer" >
        </div>
</section>

