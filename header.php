<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >



      <div class="flex justify-center bg-white">
        <img src="<?php echo get_stylesheet_directory_uri() . '/img/real-estate.svg'; ?>" class="w-20">
      </div>
    


      <div class="flex justify-evenly bg-neutral-800 text-white">
           <?php
               wp_nav_menu(
                    array(
                   'theme_location' => 'primary-menu',
                   'menu_id'        => 'primary-menu',
                   
                                     )
                 );
                 ?>
         
           <form role="search" method="get" class="flex items-center">
             <input type="search" class="bg-gray-100 rounded-full px-4 py-2" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s">
             <button type="submit" class="bg-neutral-800 text-white px-4 py-2 rounded-full ml-2">Search</button>
            </form>
     </div>


