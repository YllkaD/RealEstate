<?php
// Get the Flexible Content field
$data = get_sub_field('cards');

if ($data) :
  $template_file = ''; // Initialize the template file variable
  foreach ($data as $post) :
    $related_post_type = $post->post_type;

    if ($related_post_type === 'banesa') {
      $template_file = 'banesa.php';
    } elseif ($related_post_type === 'apartmenti') {
      $template_file = 'apartamenti.php';
    }

    // Only include the template file if it's not included yet
    if (!empty($template_file) && !defined('TEMPLATE_INCLUDED')) {
      $template_path = get_template_directory() . '/modules/cards/' . $template_file;
      if (file_exists($template_path)) {
        include $template_path;
        define('TEMPLATE_INCLUDED', true); // Set a flag to prevent further includes
      }
    }
  endforeach;
else :
  // Handle the case where there are no related "Banesa" or "Apartamenti" posts
endif;
?>
