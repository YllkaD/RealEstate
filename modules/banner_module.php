<?php
/**
 * Template Name: Page with Banner Module
 * Template Post Type: page
 */


?>

<?php
// Assuming you are in the WordPress loop
if (have_posts()) {
    while (have_posts()) {
        the_post();

        // Retrieve field values
        $banner_text = get_field('banner_text');
        $banner_image = get_field('banner_image');
        $show_button = get_field('banner_switch');
        $button_text = get_field('button_text');
        $button_link = get_field('button_link');
        ?>

        <div class="banner-module">
            <?php
            if (!empty($banner_image)) {
                echo '<img src="' . $banner_image . '" alt="Banner Image">';
            } else {
                echo 'No image found!';
            }
            ?>

            <h1><?php echo $banner_text; ?></h1>

            <?php if ($show_button): ?>
                <a href="<?php echo $button_link; ?>"><?php echo $button_text; ?></a>
            <?php endif; ?>
        </div>

        <?php
    }
}
?>

