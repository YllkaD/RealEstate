
<section class="container mx-auto">
  
  <div class="faq">
  <h1>Accordion</h1>
    <?php if (have_rows('faq_repeater')) : ?>
      <?php while (have_rows('faq_repeater')) : the_row(); ?>
        <?php
          $pytje = get_sub_field('faq_pytje');
          $pergjigje = get_sub_field('faq_pergjigje');
        ?>

      <div class="">
        <button class="faq-module" onclick="showTheFaq(this)"><?php echo $pytje ?></button>
          <div class="faq-pergjigje">
            <p><?php echo $pergjigje ?></p>
          </div>
      </div>
      
    <?php endwhile; ?>
    <?php endif; ?>

  </div>
</section>

