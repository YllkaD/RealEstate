<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Real Estate</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <?php wp_head(); ?>
    <script src="https://kit.fontawesome.com/1bf2823d81.js" crossorigin="anonymous"></script>
</head>
<body <?php body_class(); ?> >
<section class="header">
    <div class="container mx-auto">
        
        
        <div class="menu ">
            <?php      
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'link_before' => '<span class="link-class">',
                'link_after' => '</span>'
            ));
            ?>
        </div>
        
  
        

        <div class="logo text-blue-500 flex items-center space-x-4">
        <svg class="flex" xmlns="http://www.w3.org/2000/svg" width="45" height="36" viewBox="0 0 45 36" fill="none">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.7459 36H26.5815L23.0665 22.7284L16.1354 26.6874L12.7459 36ZM35.0722 36H45V11.27L30.5276 19.3733L35.0722 36ZM45 2.41403V0H25.8488L19.9986 16.0732L20.5325 16.2675L44.9111 2.38166L45 2.41403ZM16.8758 0H0V36H3.7729L16.8758 0Z" fill="#4681F4"/>
</svg>
            <h1 class="font-bold">KeyReside</h1>

        </div>

        <div class="secondary-menu">
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
    document.addEventListener("DOMContentLoaded", function() {
        const hamburger = document.querySelector(".menu-button");
    const navBar = document.querySelector(".menu");

    hamburger.onclick = function() {
        navBar.classList.toggle("active");

        
        if (hamburger.innerHTML === "☰") {
            hamburger.innerHTML = "✕";
        } else {
            hamburger.innerHTML = "☰";
        }
    }
});

 
</script>