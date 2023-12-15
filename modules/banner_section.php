<?php 
if (get_row_layout() === 'banner_section') {
$title = get_sub_field('title');
$description = get_sub_field('description');
$image = get_sub_field('photo');
}
?>


<div class="banner-container" style="background-image: url(<?php echo $image; ?>);">
    <div class="banner-elements">
        <div class="banner-title-main">
            <h1 class="banner-title"><?php echo $title;?></h1>
        </div>

        <div class="banner-description-main">
            <h4 class="banner-description"><?php echo $description;?></h4>
        </div>

        <div class="banner-search-main">
            <form action="<?php echo esc_url(home_url()); ?>" method="get">   
                <input type="search" placeholder="Search a City, an Address, a Neighborhood" class="banner-search" name="s">
                <button class="banner-btn">Search</button>
            </form>
        </div>
    </div>
</div>


  