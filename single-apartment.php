<?php
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
<!-- //header button -->
<div style="" class="flex  justify-between gap-2 px-24 mt-16 mb-8">
    <a href="#"><i class="fa-solid fa-arrow-left"></i> Back to search result</a>
    <div class="gap-x-4">
    <a href="#" class="bg-gray-200 px-4 py-2 rounded-md mx-4"><i class="fa-solid fa-arrow-up-from-bracket" style="color: #1c1c1c;"></i> Share</a>
    <a href="#" class="bg-gray-200 px-4 py-2 rounded-md"><i class="fa-regular fa-heart" style="color: #0d0d0d;"></i> Save</a>
    </div>
</div>



<!-- gallery -->
<div class="grid grid-cols-3 px-24 gap-2">
    <div class="col-span-2">
    <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="grid col-span-1 col-row-2 gap-2">
   
        <img class="rounded-md" src="https://a0.muscache.com/im/pictures/miso/Hosting-523212523411973201/original/ea201062-2728-40d7-a70f-261f15cef61d.jpeg?im_w=1200" alt="">
        <img class="rounded-md" src="https://a0.muscache.com/im/pictures/miso/Hosting-523212523411973201/original/ea201062-2728-40d7-a70f-261f15cef61d.jpeg?im_w=1200" alt="">
    </div>
</div>

<!-- //details -->
    <div class="grid grid-cols-3 px-24 gap-4 mt-16">
        <div class="col-span-2">
            <div class="price flex justify-between">
                <h4>$<?php echo the_field('price'); ?></h4>
                <h4><i class="fa-solid fa-location-dot"></i> <?php the_field('address'); ?></h4>
            </div>
            <div class="grid grid-cols-4 border-2 border-blue p-4 rounded-md mt-4">
                <div class="">
                    <div><p class="text-xs font-bold">PROPERTY TYPE</p></div>
                    <div class="mt-8 gap-4"><i class="fa-regular fa-building align-middle"></i> Flat</div>
                </div>
                <div class="">
                <div><p class="text-xs font-bold">SIZE</p></div>
                    <div class="mt-8 gap-4"><i class="fa-solid fa-ruler-horizontal"></i><?php the_field('area'); ?> sqm</div>
                </div>
                <div class="">
                <div><p class="text-xs font-bold">BEDROOMS</p></div>
                    <div class="mt-8 gap-4"><i class="fa-solid fa-bed"></i> x <?php the_field('bedrooms'); ?></div>
                </div>
                <div class="">
                <div><p class="text-xs font-bold">BATHROOMS</p></div>
                    <div class="mt-8 gap-4"><i class="fa-solid fa-bath"></i> x <?php the_field('bathrooms'); ?></div>
                </div>
            </div>

            <div class="bg-blue-200 p-6 mt-10 rounded-md">
                ABOUT THE PROPERTY
            </div>
            <p class="text-sm mt-6">
            <?php the_field('description'); ?>            </p>

            <div class="bg-blue-200 p-6 mt-14 rounded-md">
                PROPERTY FEATURES
            </div>
            <div class="grid grid-cols-2 mt-4">
                <div class="col-span-1">
                    <ul>
                    <?php
                $features = get_field('features');
                if ($features) {
                    foreach ($features as $feature) {
                        echo '<li>' . $feature . '</li>';
                    }
                }
                ?>
                    </ul>
                </div>
                <div class="col-span-1">
                <ul>
                        <li>
                            Number of Rooms: 3
                        </li>
                        <li>
                            Private Terrace
                        </li>
                        <li>
                            High Ceiling
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
        <!-- Agent details -->
        <div class="col-span-1 ">
            <div class="border-2 border-blue rounded-md p-4 align-middle">
                <div class="flex gap-5">
                    <div style="width: 20%;" class="img">
                        <img class="rounded-full" src="https://a0.muscache.com/im/pictures/user/b1ee903e-bd3c-4679-a90c-fa0583dd722f.jpg?im_w=240">
                    </div>
                    <div class="">
                        <h3>John Doe</h3>
                    </div>
                </div>
                <div class="mt-4">
                <p class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam a aspernatur suscipit deleniti voluptas?</p>
                </div>
            <div class="mt-4">
                <div class="phone flex gap-4">
                <i class="fa-solid fa-phone"></i> <p class="text-sm">0123445656</p>
                </div>
                <div class="email flex gap-4">
                <i class="fa-regular fa-envelope"></i><p class="text-sm"> mail@example.com</p>
                </div>
            </div>
            <div class="mt-4 flex justify-center">
                <a class="bg-blue-400 text-white py-2 w-full rounded-md flex justify-center text-sm font-bold"  href="#">Schedule a tour</a>
            </div>
            </div>
        </div>
    </div>

<!-------------------------------------------- MAP ------------------------------------------------------>
<div class="px-24 mt-16">
    <h5 class="font-bold mb-4 ml-2">LOCATION</h5>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46940.2060114189!2d21.1587273!3d42.666380100000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee605110927%3A0x9365bfdf385eb95a!2sPristina!5e0!3m2!1sen!2s!4v1702657960418!5m2!1sen!2s"  height="400" style="border:0; border-radius:10px; width:90vw;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
</div>
<?php
    }
}

get_footer();
?>



 