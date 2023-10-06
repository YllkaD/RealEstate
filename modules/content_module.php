

<?php
    $postim = get_sub_field('postim');
?>
    
<section class="container mx-auto content-module">
    
        <?php if($postim): ?>
            <div class="content-module">
               <?php echo $postim; ?>
            </div>
        <?php endif; ?>
    
</section>

