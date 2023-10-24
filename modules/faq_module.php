<section class="faq-section">
  <div class="faq container mx-auto">
    <?php $title = get_sub_field('section_title'); ?>
    <?php if ($title) : ?>
      <div class="title">
        <?php echo $title; ?>
      </div>
    <?php endif; ?>

    <?php if (have_rows('faq_repeater')) : ?>
      <?php while (have_rows('faq_repeater')) : the_row(); ?>
        <?php
          $pytje = get_sub_field('faq_pytje');
          $pergjigje = get_sub_field('faq_pergjigje');
        ?>

        <div class="faq-text">
          <button class="accordion" onclick="showTheFaq(this)">
            <?php echo $pytje; ?>
          </button>

          <div class="answer">
            <?php echo $pergjigje; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
