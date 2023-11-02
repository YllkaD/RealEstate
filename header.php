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
<section class="header">
    <div class="container mx-auto">
        
        
        <div class="menu">
            <?php      
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'link_before' => '<span class="link-class">',
                'link_after' => '</span>'
            ));
            ?>
        </div>

        <div class="logo text-blue-500">
        <a href="<?php echo get_home_url(); ?>">
            <h1 class="font-bold">KeyReside</h1>
        </a>
        </div>

        <div class="secondary-menu menu-active">
            <?php      
            wp_nav_menu(array(
                'theme_location' => 'secondary',
                'link_before' => '<span class="link-class">',
                'link_after' => '</span>'
            ));
            ?>
        </div>
        <div class="menu-toggle">
            <button class="menu-button" id="menu-button">&#9776;</button>
        </div>
</div>

</section>



<script>

document.getElementById("menu-button").addEventListener("click", function() {
    var navmenu = document.querySelector(".menu");
    navmenu.classList.toggle("active");
});



</script>