<?php
get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
?>
<!-- //header button -->
<div style="" class="flex  justify-between gap-2 px-24 mt-16 mb-8">
<a href="javascript:history.go(-1);"><i class="fa-solid fa-arrow-left"></i> Back to search result</a>

    <div class="gap-x-4">
    <a href="#" class="bg-gray-200 px-4 py-2 rounded-md mx-4"><i class="fa-solid fa-arrow-up-from-bracket" style="color: #1c1c1c;"></i> Share</a>
    <a href="#" class="bg-gray-200 px-4 py-2 rounded-md"><i class="fa-regular fa-heart" style="color: #0d0d0d;"></i> Save</a>
    </div>
</div>

<div class="grid grid-cols-3 px-24 gap-2">
    <div class="col-span-2">
        <div class="apartment-template-thumbnail rounded-md" style="background-size: cover;
    height: 100%;
    width: 100%;background-image: url('<?php the_post_thumbnail_url('full'); ?>');"></div>
    </div>
    <div class="grid col-span-1 col-row-2 gap-2">
        <?php
        $gallery_images = get_field('gallery'); // Retrieve the ACF gallery field data
        $visible_images = array_slice($gallery_images, 0, 2); // Show only the first two images
        $remaining_images = array_slice($gallery_images, 2); // Get the remaining images

        // Loop through the first two visible images
        foreach ($visible_images as $index => $image_url) {
            echo '<img class="rounded-md" src="' . esc_url($image_url) . '" style="width: 100%; height: 100%; object-fit: cover;" alt="Gallery Image">';
        }

        if (!empty($remaining_images)) {
            // Display a button to open the modal
            echo '<button id="openModalButton" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-2">View More</button>';
            
            // Modal container (hidden by default)
            echo '<div id="imageModal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 flex items-center justify-center hidden">';
                // Modal content
                echo '<button class="close-button">&times;</button>';
                echo '<div class="bg-white p-4 rounded-lg">';
                foreach ($remaining_images as $image_url) {
                    echo '<img class="rounded-md mb-4 hidden" src="' . esc_url($image_url) . '" style="width: 100%; height: auto; object-fit: cover;" alt="Gallery Image">';
                }
                echo '<div class="flex justify-between">';
                echo '<button id="prevImage" class="text-lg text-gray-700">&#8249;</button>';
                echo '<button id="nextImage" class="text-lg text-gray-700">&#8250;</button>';
                echo '</div>';
                echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
    // Function to set image size based on modal dimensions
    function setImageSize() {
        var modal = $('#imageModal');
        var modalWidth = modal.outerWidth();
        var modalHeight = modal.outerHeight();
        
        $('#imageModal img').css({
            'max-width': modalWidth - 50, // Considering padding
            'max-height': modalHeight - 80 // Considering padding and controls height
        });
    }

    // Function to toggle modal and overlay and set image size
    function toggleModal() {
        $('.overlay').toggleClass('blur');
        $('#imageModal').toggle();
        setImageSize(); // Set image size when modal is opened
    }

    // Show Modal and Display All Images
    $('#openModalButton').on('click', function() {
        $('.overlay').show();
        toggleModal();
        $('#imageModal img').first().show();
    });

    // Close Modal
    function closeModal() {
        $('.overlay').removeClass('blur');
        $('#imageModal').hide();
    }

    $('#imageModal .close-button').on('click', function() {
        closeModal();
    });

    // Close Modal when clicking outside the modal
    $('.overlay, #imageModal').on('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
    // $('.overlay, #imageModal').on('click', function(e) {
    //     if (e.target === this) {
    //         $('.overlay').removeClass('blur');
    //         $('#imageModal').hide();
    //     }
    // });

    // Navigation Arrows
    $('#prevImage').on('click', function() {
        var currentImg = $('#imageModal img:visible');
        var prevImg = currentImg.prev('img');

        if (prevImg.length) {
            currentImg.hide();
            prevImg.show();
        }
    });

    $('#nextImage').on('click', function() {
        var currentImg = $('#imageModal img:visible');
        var nextImg = currentImg.next('img');

        if (nextImg.length) {
            currentImg.hide();
            nextImg.show();
        }
    });

    // Resize images when the window is resized
    $(window).resize(function() {
        if ($('#imageModal').is(':visible')) {
            setImageSize();
        }
    });
});




</script>


</div>



<!-- //details -->
    <div class="grid grid-cols-3 px-24 gap-4 mt-16">
        <div class="col-span-2">
            <div class="price flex justify-between">
                <h4><?php echo the_field('price'); ?>€</h4>
                <h4><?php $location = get_field('address');

if (isset($location['street_name']) && isset($location['city'])) {
    echo '<p class="text-gray-700"><span style="display: inline-flex; align-items: center;"><svg width="20px" height="20px" viewBox="0 0 0.4 0.4" xmlns="http://www.w3.org/2000/svg" fill="#000000"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.271 0.067A0.101 0.101 0 0 0 0.201 0.038h-0.001a0.101 0.101 0 0 0 -0.1 0.1c0 0.019 0.005 0.037 0.015 0.053L0.193 0.35h0.013l0.079 -0.16c0.01 -0.016 0.015 -0.034 0.015 -0.053a0.101 0.101 0 0 0 -0.03 -0.07zM0.198 0.063l0.002 0 0.002 0a0.077 0.077 0 0 1 0.074 0.076 0.069 0.069 0 0 1 -0.012 0.039l-0.001 0.001 0 0.001L0.2 0.307l-0.063 -0.128 0 -0.001 -0.001 -0.001a0.069 0.069 0 0 1 -0.012 -0.039A0.077 0.077 0 0 1 0.198 0.063zm0.015 0.054a0.025 0.025 0 1 0 -0.028 0.042 0.025 0.025 0 0 0 0.028 -0.042zM0.172 0.096a0.05 0.05 0 1 1 0.056 0.083 0.05 0.05 0 0 1 -0.056 -0.083z"/></svg> '
        . esc_html($location['street_name']) . ', ' . esc_html($location['city']) . '</span></p>';
} elseif (isset($location['address'])) {
    echo '<p class="text-gray-700"><b>Location: </b>' . esc_html($location['address']) . '</p>';
} else {
    echo '<p class="text-gray-700">No location available</p>';
}
?></p></h4>
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
    <div class="col-span-1 ml-4">
        <ul>
            <?php
            $features = get_field('features');
            if ($features) {
                $firstFiveFeatures = array_slice($features, 0, 5); // Get the first five features
                foreach ($firstFiveFeatures as $feature) {
                    echo '<li>' . $feature . '</li>';
                }
            }
            ?>
        </ul>
    </div>
    <div class="col-span-1">
        <ul>
            <?php
            if ($features) {
                $remainingFeatures = array_slice($features, 5); // Get the remaining features after the first five
                foreach ($remainingFeatures as $feature) {
                    echo '<li>' . $feature . '</li>';
                }
            }
            ?>
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
                        <h3><?php echo get_the_author(); ?></h3>
                    </div>
                </div>
                <div class="mt-4">
                <p class="text-xs"><?php $post_id = get_the_ID();

// Get the post author's user ID
$post_author_id = get_post_field('post_author', $post_id);

// Retrieve the author's email using the user ID
$author_info = get_userdata($post_author_id);

if ($author_info) {
    echo esc_html($author_info->user_description); // Email of the post author
}?></p>
                </div>
            <div class="mt-4">
                <div class="phone flex gap-4">
                <i class="fa-solid fa-phone"></i> <p class="text-sm">0123445656</p>
                </div>
                <div class="email flex gap-4">
                <i class="fa-regular fa-envelope"></i><p class="text-sm"> <?php $post_id = get_the_ID();

// Get the post author's user ID
$post_author_id = get_post_field('post_author', $post_id);

// Retrieve the author's email using the user ID
$author_info = get_userdata($post_author_id);

if ($author_info) {
    echo esc_html($author_info->user_email); // Email of the post author
} ?></p>
                </div>
            </div>
            <div class="mt-4 flex justify-center">
                <a class="bg-blue-400 text-white py-2 w-full rounded-md flex justify-center text-sm font-bold"  href="#">Schedule a tour</a>
            </div>
            </div>
        </div>
    </div>

<!-------------------------------------------- MAP ------------------------------------------------------>
<div class="container mx-auto my-20">
        <?php if (get_field('address')) : ?>
                    <?php 
                        $location = get_field('address');
                        if( $location ): ?>
                            <div class="acf-map" data-zoom="16">
                                <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
                            </div>
                    <?php endif; ?>
                <?php endif; ?>
        </div>
<?php include (get_template_directory().'/include/module.php'); ?> 
</div>
<?php
    }
}

get_footer();
?>



 