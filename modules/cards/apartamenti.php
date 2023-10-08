<div class="container mx-auto flex flex-wrap items-start my-16">
<?php
foreach ($data as $post) :
  $field = get_field_objects($post->ID);
  
  ?>
  <div class="lg:w-1/4 w-full lg:pr-3 mt-6">
  <div class="bg-gray-200 rounded-xl relative">
    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="object-cover h-48 w-full rounded-t-xl">
    <div class="p-6">
      <h2 class="text-2xl font-bold mb-2"><?php the_title(); ?></h2>
      <div class="text-gray-800 leading-relaxed">
        description
      </div>
    </div>
  </div>
</div>
<?php endforeach;
?>
</div>