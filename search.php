<?php 
/*
Template Name: Custom Search
*/
get_header(); ?>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <h1>Kërko Prona të Patundshme</h1>

      
        <!-- <form role="search" method="get" id="searchform"
	class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
		<input type="submit" id="searchsubmit"
			value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form> -->

        

<form action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <input type="text" name="price" placeholder="Price" value="<?php echo get_search_query(); ?>">
    <input type="text" name="s" placeholder="Apartment" >
    <input type="submit" value="Submit">
</form>

<div class="container mx-auto p-4">   
<h1 class="text-3xl font-bold mb-8">Search Results for '<?php echo get_search_query(); ?>'</h1>   
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["price"])) {
    $price = sanitize_text_field($_GET["price"]); // Merrni vlerën e "price" nga kërkesa GET

    // Kërko postimet e tipit "apartment" me vlerën e "price" të dhënë
    $args = array(
        'post_type' => 'apartment',
        'meta_key' => 'price',
        'meta_value' => $price,
    );

    $apartment_query = new WP_Query($args); 
    
    if ($apartment_query->have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ($apartment_query->have_posts()) : $apartment_query->the_post(); ?>
            <div class="bg-white rounded-lg p-4 shadow-md">
                <!-- //Shfaqeni postimin e gjetur -->
            
             <h2 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php
                // Retrieve the label for the "Bedrooms" ACF field dynamically
                $bedrooms_field = get_field_object('bedrooms');
                $bedrooms_label = $bedrooms_field['label'];

                 // Output the label and value
               
                    $price = get_field('price');

                    $formatted_price = '€' . number_format($price);   ?>
                    <div class="price"><?php echo $formatted_price; ?></div>
                    <p class="text-gray-700"><?php echo esc_html($bedrooms_label); ?>: <?php echo get_post_meta(get_the_ID(), 'bedrooms', true); ?></p>
                    <p class="text-gray-700">Location: <?php echo get_post_meta(get_the_ID(), 'location', true); ?></p>
                    <p class="text-gray-700">Bathrooms: <?php echo get_post_meta(get_the_ID(), 'bathrooms', true); ?></p>
            </div>
            
                   <?php endwhile;?> // Shtoni kodin tuaj për paraqitjen e të dhënave të tjera të postimit
        </div>
        <?php else : ?>
        <p class="text-lg mt-8">No results found. Please try another search term.</p>
    <?php endif;  wp_reset_postdata(); // Kujdeseni që të rihapni kërkimin
}?>

</div>
<div>

<!--           ---------------------------------------------------------------- -->



<div class="container mx-auto p-4">
<h1 class="text-3xl font-bold mb-8">Search Results for '<?php echo get_search_query(); ?>'</h1>
<?php if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["price"])) {
    $price = sanitize_text_field($_GET["price"]); // Merrni vlerën e "price" nga kërkesa GET

    // Kërko postimet e tipit "apartment" me vlerën e "price" të dhënë
    $args = array(
        'post_type' => 'apartment',
        'meta_key' => 'price',
        'meta_value' => $price,
    );

    $apartment_query = new WP_Query($args);
    if ($apartment_query->have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while ($apartment_query->have_posts()) : $apartment_query->the_post(); ?>
                <div class="bg-white rounded-lg p-4 shadow-md">
                    
                    <h2 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php
                    // Retrieve the label for the "Bedrooms" ACF field dynamically
                    $bedrooms_field = get_field_object('bedrooms');
                    $bedrooms_label = $bedrooms_field['label'];

                    // Output the label and value
                    ?>
                    <p class="text-gray-700"><?php echo esc_html($bedrooms_label); ?>: <?php echo get_post_meta(get_the_ID(), 'bedrooms', true); ?></p>
                    <p class="text-gray-700">Price: <?php echo $formatted_price; ?></p>
                    <p class="text-gray-700">Location: <?php echo get_post_meta(get_the_ID(), 'location', true); ?></p>
                    <p class="text-gray-700">Bathrooms: <?php echo get_post_meta(get_the_ID(), 'bathrooms', true); ?></p>
                    <p class="text-gray-700">
                        <?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = ' ...'); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="mt-4 block text-blue-500">Book Now</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-lg mt-8">No results found. Please try another search term.</p>
    <?php endif;  wp_reset_postdata(); // Kujdeseni që të rihapni kërkimin
}?>

</div>
    </main>
</div>

<!-- <div class="container mx-auto py-8">
    <form action="<?php echo esc_url(home_url()); ?>" method="get" class="grid grid-cols-1 md:grid-cols-5 gap-4 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="propertyType">
                Property Type
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="propertyType">
                <option value="any">Any</option>
                <option value="apartment">Apartment</option>
                <option value="house">House</option>
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                Location
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="location">
                <option value="any">Any</option>
               
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="area">
                Area (m²)
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="area">
                <option value="any">Any</option>
                <option value="50m2">50 m²</option>
                <option value="100m2">100 m²</option>
                <option value="150m2">150 m²</option>
               
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="minPrice">
                Minimum Price
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="minPrice">
                <option value="any">Any</option>
                <option value="50000">$50,000</option>
                <option value="100000">$100,000</option>
                <option value="150000">$150,000</option>
               
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="maxPrice">
                Maximum Price
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="maxPrice">
                <option value="any">Any</option>
                <option value="200000">$200,000</option>
                <option value="250000">$250,000</option>
                <option value="300000">$300,000</option>
                
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="bathrooms">
                Bathrooms
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="bathrooms">
                <option value="any">Any</option>
                <option value="1"  name="s">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                
            </select>
        </div>
        <div class="mb-4 col-span-1">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="bedrooms">
                Bedrooms
            </label>
            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" id="bedrooms">
                <option value="any">Any</option>
                <option value="1"  name="s">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
               
            </select>
        </div>
        <div class="mb-6 col-span-1 md:col-span-5">
            <button class=" bg-blue-500 hover-bg-blue-700 text-white font-bold py-2 px-4 rounded focus-outline-none focus-shadow-outline">
                Search
            </button>
        </div>
    </form>
</div> -->






<div class="container mx-auto p-4">

    <h1 class="text-3xl font-bold mb-8">Search Results for '<?php echo get_search_query(); ?>'</h1>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <div class="bg-white rounded-lg p-4 shadow-md">
                    <?php
                    // Check if the post has a featured image (post thumbnail)
                    if (has_post_thumbnail()) {
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'w-full h-auto mb-4']);
                            ?>
                        </a>
                        <?php
                    }
                    
                    $gallery[]=$gallery;
                    $gallery = get_field('gallery');
                    
                    ?>
                    
                    <img src="<?php echo $gallery; ?>" alt="<?php echo $gallery; ?>" class="h-auto max-w-lg transition-all duration-300 rounded-lg cursor-pointer" >

                    <h2 class="text-xl font-semibold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <?php
                    // Retrieve the label for the "Bedrooms" ACF field dynamically
                    $bedrooms_field = get_field_object('bedrooms');
                    $bedrooms_label = $bedrooms_field['label'];

                    // Output the label and value
                    ?>
                    <p class="text-gray-700"><?php echo esc_html($bedrooms_label); ?>: <?php echo get_post_meta(get_the_ID(), 'bedrooms', true); ?></p>

                    <p class="text-gray-700">Location: <?php echo get_post_meta(get_the_ID(), 'location', true); ?></p>
                    <p class="text-gray-700">Bathrooms: <?php echo get_post_meta(get_the_ID(), 'bathrooms', true); ?></p>
                    <p class="text-gray-700">
                        <?php echo wp_trim_words(get_the_content(), $num_words = 20, $more = ' ...'); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="mt-4 block text-blue-500">Book Now</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p class="text-lg mt-8">No results found. Please try another search term.</p>
    <?php endif; ?>

</div>

<?php get_footer(); ?>

