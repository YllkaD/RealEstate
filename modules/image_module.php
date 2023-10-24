
<?php   if (get_row_layout() === 'image_module') :
    $title = get_sub_field('title');
    $image = get_sub_field('image');

endif;
?>


<section class="container mx-auto my-24">
    <div>
        <?php echo $title; ?>
    </div>
        <div class="flex justify-center items-center">
            <img src="<?php echo $image; ?>" alt="<?php echo $image; ?>" class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer" >
        </div>
</section> 