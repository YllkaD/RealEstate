<?php
$data = get_sub_field('cards');
$template_file = ''; 

foreach ($data as $post) {
  $related_post_type = $post->post_type;

  if ($related_post_type === 'house') {
    $template_file = 'houses.php';
  } elseif ($related_post_type === 'apartment') {
    $template_file = 'apartments.php';
  }
}

if (!empty($template_file)) {
  $template_path = get_template_directory() . '/modules/cards/' . $template_file;
  if (file_exists($template_path)) {
    include $template_path;
    define('TEMPLATE_INCLUDED', true); 
  }
}
?> 
