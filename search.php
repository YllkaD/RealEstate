<?php 
  /*
  Template Name: Custom Search
  */

  get_header(); ?>
  

  <div class="container mx-auto p-4">
    <!-- Inside your search.php or other template file where you want to display the search form -->
    <form class="search-form flow-root mb-9" action="<?php echo esc_url(home_url('/')); ?>">
      <label>
          <span class="screen-reader-text">Search for:</span>
          <input value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>"
           type="search" class="search-field rounded float-left" placeholder="Search…" 
            name="s" />
      </label>
       
          <!-- <select name="brand" id="countries" class="float-right border  text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:border-blue-500">
            <option selected>For Rent</option>
            <option value="newlist" >New Listings</option>
            <option value="hightprice" >Highest Price</option>
            <option value="lowestprice">Lowest Price</option>
          </select> --> 

          
        <span class="screen-reader-text">Filter by Price:</span>
        <select id="price-filter" name="price-filter" class="cursor-pointer  mx-2 border text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:border-blue-500">
            <option value="" selected disabled>Select Price Range</option>
            <option value="high">Highest Price</option>
            <option value="low">Lowest Price</option>
        </select>
    </label>
         
          
          
          <select name="brand" class="cursor-pointer  mr-2 border text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:border-blue-500">
            <option value="">Choose a apartment</option>
            <?php foreach($brands as $brand): ?>

              <option 
              <?php if( isset($_GET['brand']) && ( $_GET['brand'] == $brand->slug) ): ?>
                selected
              <?php endif; ?>
              
              value="<?php echo $brand->slug ?>"><?php echo $brand->name ?></option>
              <?php endforeach; ?>
          </select>

          
        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Search
            <!-- Your SVG icon for the search button -->
        </button>
        <div class="text-right">
            <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <?php endwhile; ?>
                <p class="text-lg "><?php echo $wp_query->found_posts; ?>   Results</p>
            <?php endif; ?> 
        </div>
    </form>
   
    

    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 hour">
            <?php while (have_posts()) : the_post(); ?>
                <div class=" rounded-lg p-4 ">
                
                 <div class="bg-white shadow-md hours-ago">
                  <?php $post_date = get_the_date('F j, Y, g:i a'); 
                        $time_ago = human_time_diff(get_the_time('U'), current_time('timestamp'));
                        ?><?php
                        echo 'New ' . $time_ago . ' ago';
                    ?>
                 </div>
   
                    <?php
                    if (has_post_thumbnail()) {
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'object-cover h-66 w-full rounded-t-xl']);
                            ?>
                        </a>
                    <?php
                    } else {
                        ?>
                    <img src="<?= get_template_directory_uri() . '/img/apartment.jpg' ?>" alt="Apartment Image" class="object-cover h-66 w-full rounded-t-xl">
                    <?php
                    }
    
                    $post_id = get_the_ID();
                    // Merr vlerën e fushës "gallery" nga ACF
                    $gallery = get_field('gallery', $post_id);
                    
                    ?>
                    
                  <div class="card-apartment">
                    <h2 class="text-2xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="text-gray-700 my-3">  
                        <?php $location = get_field('address', $post_id);

                          if (isset($location['street_name']) && isset($location['city'])) {
                              echo '<p class="text-gray-700"><span style="display: inline-flex; align-items: center;"><svg width="20px" height="20px" viewBox="0 0 0.4 0.4" xmlns="http://www.w3.org/2000/svg" fill="#000000"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.271 0.067A0.101 0.101 0 0 0 0.201 0.038h-0.001a0.101 0.101 0 0 0 -0.1 0.1c0 0.019 0.005 0.037 0.015 0.053L0.193 0.35h0.013l0.079 -0.16c0.01 -0.016 0.015 -0.034 0.015 -0.053a0.101 0.101 0 0 0 -0.03 -0.07zM0.198 0.063l0.002 0 0.002 0a0.077 0.077 0 0 1 0.074 0.076 0.069 0.069 0 0 1 -0.012 0.039l-0.001 0.001 0 0.001L0.2 0.307l-0.063 -0.128 0 -0.001 -0.001 -0.001a0.069 0.069 0 0 1 -0.012 -0.039A0.077 0.077 0 0 1 0.198 0.063zm0.015 0.054a0.025 0.025 0 1 0 -0.028 0.042 0.025 0.025 0 0 0 0.028 -0.042zM0.172 0.096a0.05 0.05 0 1 1 0.056 0.083 0.05 0.05 0 0 1 -0.056 -0.083z"/></svg> '
                                  . esc_html($location['street_name']) . ', ' . esc_html($location['city']) . '</span></p>';
                          } elseif (isset($location['address'])) {
                              echo '<p class="text-gray-700"><b>Location: </b>' . esc_html($location['address']) . '</p>';
                          } else {
                              echo '<p class="text-gray-700">No location available</p>';
                          }
                        ?></p>
                  <div class="flex gap-4 text-gray-800 leading-relaxed my-3">
                    <div class="flex items-center justify-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="21" height="14" viewBox="0 0 21 14" fill="none">
                        <path d="M15.8557 2.78996H11.7459C10.4423 2.78996 9.33979 3.65068 8.97556 4.83482C8.85661 4.32551 8.56275 3.86411 8.14178 3.50955C7.58634 3.04174 6.84879 2.78996 6.09404 2.78996C5.3393 2.78996 4.60175 3.04174 4.04631 3.50955C3.73493 3.77181 3.49309 4.09251 3.34015 4.44782V2.73315C3.34015 2.00774 2.75208 1.41968 2.02667 1.41968C1.30126 1.41968 0.713196 2.00774 0.713196 2.73315V11.3833C0.713196 12.1087 1.30126 12.6968 2.02667 12.6968C2.75208 12.6968 3.34015 12.1087 3.34015 11.3833V11.1691C3.34015 10.8776 3.57641 10.6414 3.86786 10.6414H16.455C16.7464 10.6414 16.9827 10.8776 16.9827 11.1691V11.3833C16.9827 12.1087 17.5708 12.6968 18.2962 12.6968C19.0216 12.6968 19.6096 12.1087 19.6096 11.3833V6.03053C19.6096 5.14066 19.1893 4.30869 18.4787 3.71022C17.7707 3.11392 16.8262 2.78996 15.8557 2.78996Z" stroke="#545454"/>
                      </svg>
                        <span class="text-[#545454] text-sm font-normal"><?php echo get_post_meta(get_the_ID(), 'bedrooms', true); ?> Bedrooms</span>
                    </div>
                  
                    <div class="flex items-center justify-center gap-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                        <path d="M6.1443 1.13718L6.46142 1.52375L6.1443 1.13718C5.82939 1.39552 5.6269 1.76961 5.6269 2.18628V2.57613C5.6269 4.53436 7.21436 6.12182 9.17259 6.12182H11.7068C12.0052 6.12182 12.2397 5.9834 12.3922 5.8725C12.4715 5.81479 12.5438 5.75304 12.603 5.70131C12.6213 5.68532 12.638 5.67068 12.6534 5.65706C12.6929 5.62234 12.7249 5.59417 12.7584 5.56669C12.8033 5.5299 12.8818 5.49717 12.9797 5.49717H19.0711C19.1689 5.49717 19.2475 5.5299 19.2923 5.56669C19.3258 5.59417 19.3579 5.62235 19.3973 5.65707C19.4128 5.67069 19.4294 5.68532 19.4477 5.70131C19.507 5.75304 19.5792 5.81479 19.6586 5.8725C19.811 5.9834 20.0456 6.12182 20.344 6.12182H22.1167C22.4165 6.12182 22.6888 6.22035 22.8764 6.37429L23.1936 5.98772L22.8764 6.37429C23.0613 6.52595 23.1396 6.70794 23.1396 6.8711V9.36902C23.1383 10.3604 22.6583 11.3363 21.7597 12.0736C21.1281 12.5917 20.3296 12.9578 19.4544 13.1304C18.6024 13.2984 17.8096 14.0067 17.8096 14.9915C17.8096 14.9925 17.8096 14.9967 17.8053 15.0051C17.8009 15.014 17.7907 15.0292 17.7695 15.0466C17.7247 15.0834 17.6461 15.1161 17.5482 15.1161C17.4504 15.1161 17.3718 15.0834 17.3269 15.0466C17.3057 15.0292 17.2955 15.014 17.2911 15.0051C17.2868 14.9967 17.2868 14.9925 17.2868 14.9915C17.2868 14.0254 16.5036 13.2422 15.5375 13.2422H8.89903C7.93293 13.2422 7.14974 14.0254 7.14974 14.9915C7.14974 14.9925 7.1497 14.9967 7.14545 15.0051C7.14099 15.014 7.13085 15.0292 7.1096 15.0466C7.06476 15.0834 6.98617 15.1161 6.88832 15.1161C6.79048 15.1161 6.71189 15.0834 6.66704 15.0466C6.6458 15.0292 6.63565 15.014 6.63119 15.0051C6.62694 14.9967 6.6269 14.9925 6.6269 14.9915C6.6269 14.0067 5.83418 13.2984 4.98216 13.1304C4.10695 12.9578 3.30842 12.5917 2.67685 12.0736C1.77829 11.3364 1.29834 10.3606 1.29695 9.36933V6.8711C1.29695 6.70794 1.37524 6.52595 1.56011 6.37429C1.74775 6.22035 2.02001 6.12182 2.31979 6.12182C3.8575 6.12182 5.10406 4.87526 5.10406 3.33755V2.18628C5.10406 1.77462 5.30268 1.3543 5.70174 1.02693C6.10357 0.697282 6.66634 0.500028 7.26903 0.500033L7.27111 0.500024C7.79933 0.497829 8.30301 0.64557 8.69732 0.90596C9.08744 1.16358 9.33636 1.50744 9.43242 1.86635C9.43263 1.86817 9.43248 1.86982 9.43193 1.87204C9.43107 1.87552 9.42791 1.88519 9.4164 1.89929L9.80367 2.21555L9.4164 1.89929C9.39157 1.92969 9.33368 1.97132 9.24037 1.98684C9.14753 2.00229 9.05597 1.98516 8.99044 1.94991C8.92561 1.91504 8.91193 1.87854 8.91033 1.87237L8.91048 1.87233L8.90701 1.86022C8.80814 1.5156 8.57666 1.23095 8.27867 1.03815C7.98161 0.845956 7.6255 0.74827 7.26819 0.749315C6.86146 0.749497 6.45622 0.88129 6.1443 1.13718ZM18.8096 7.49575C18.8096 6.52964 18.0265 5.74646 17.0604 5.74646H14.9904C14.0243 5.74646 13.2411 6.52964 13.2411 7.49575C13.2411 8.46185 14.0243 9.24503 14.9904 9.24503H17.0604C18.0265 9.24503 18.8096 8.46185 18.8096 7.49575ZM22.2733 10.7902C22.4986 10.344 22.6167 9.86089 22.6167 9.36967V8.01323C22.6167 7.10631 21.8815 6.3711 20.9746 6.3711C20.0677 6.3711 19.3325 7.10631 19.3325 8.01323V9.36967C19.3325 9.37068 19.3324 9.37494 19.3282 9.38336C19.3237 9.39219 19.3136 9.40738 19.2923 9.4248C19.2475 9.46159 19.1689 9.49432 19.0711 9.49432H12.9797C12.8818 9.49432 12.8033 9.46159 12.7584 9.4248C12.7372 9.40738 12.727 9.39219 12.7226 9.38336C12.7183 9.37494 12.7183 9.37069 12.7183 9.36967C12.7183 7.71361 11.3758 6.3711 9.7197 6.3711H4.81837C3.1623 6.3711 1.81979 7.71361 1.81979 9.36967C1.81979 10.3662 2.30305 11.2963 3.11775 11.9647C3.92966 12.6308 5.01309 12.9929 6.1269 12.9929H18.3096C18.8629 12.9929 19.4124 12.9036 19.9274 12.7286C20.4424 12.5536 20.9158 12.2953 21.3188 11.9647C21.7219 11.634 22.0482 11.236 22.2733 10.7902Z" stroke="#545454"/>
                      </svg>
                        <span class="text-[#545454] text-sm font-normal"><?php echo get_post_meta(get_the_ID(), 'bathrooms', true); ?> Baths</span>
                    </div>
                   
                    
                  </div>
                  
                    <div class="mt-10 flex flex-row justify-between ">
                      <h3 class="text-left ">
                      <span class="text-[#545454] text-sm font-normal price-apartment" style="margin-right: 10px; margin-top:20px; font-size: 25px;">
                          <?php echo number_format(get_post_meta(get_the_ID(), 'price', true), 0, '.', ','); ?>€ 
                      </span>
                      </h3>              
                      <button>
                          <a href="<?php the_permalink(); ?>" class="bg-blue-500 text-white py-1.5 px-3 rounded-full hover:bg-blue-600">Book Now</a>
                      </button>
                    </div>
                  </div>
                
          
                </div>
            <?php endwhile; 
            ?>
            
        </div>
    <?php else : ?>
        <p class="text-lg mt-8">No results found. Please try another search term.</p>
    <?php endif; ?> <br>
 </div>
  <div class="grid place-items-center">
      <?php aquila_pagination(); ?>
  </div>










<?php get_footer(); ?> 

