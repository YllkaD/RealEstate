<?php 
$row_cards_desktop = get_sub_field('row_cards_desktop');
$row_cards_tablet = get_sub_field('row_cards_tablet');
$row_cards_mobile = get_sub_field('row_cards_mobile');
?>

<div class="container mx-auto grid grid-cols-<?=$row_cards_mobile?> md:grid-cols-<?=$row_cards_tablet?> lg:grid-cols-<?=$row_cards_desktop?> gap-4 items-start my-16">
  <?php
  foreach ($data as $post) :
    $field = get_field_objects($post->ID); ?>
    <div class="w-full lg:pr-3 mt-6">
        <div class="bg-gray-200 rounded-xl relative">
          <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="object-cover h-48 w-full rounded-t-xl">
          <div class="p-6">
              <h2 class="text-2xl font-bold mb-2"><?php the_title(); ?></h2>
              <div class="text-gray-800 leading-relaxed">
              <p><?php the_content();?></p>
              </div>
          </div>
        </div>
    </div>
  <?php endforeach; ?>
</div>