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
    

<?php

/*
	==========================================
	Pjesen e Headerit e rregullon,wp_nav_menu e kam vendos vetem per veti me mu shfaq
	==========================================
*/
wp_nav_menu(
    array(
        'theme_location' => 'primary-menu',
        'menu_id'        => 'primary-menu',
    )
);


?>
