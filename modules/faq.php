
<div class="bg-gray-100">

----------------------------------------------------------




<?php if (have_rows('faq_items')) : ?>
  <?php $index = 1; ?>
  <?php while (have_rows('faq_items')) : the_row(); ?>
    <?php
    $questions = get_sub_field('faq_question');
    $answers = get_sub_field('faq_answer');?>

    <div class="container md:max-w-screen-md mx-auto">
      <div id="accordion-collapse-<?php echo $index; ?>" onclick="pyetja(this)" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-<?php echo $index; ?>">
          <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 <?php echo $index === 1 ? 'rounded-t-xl' : ''; ?> dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 bg-gray-900" data-accordion-target="#accordion-collapse-body-<?php echo $index; ?>" aria-expanded="true" aria-controls="accordion-collapse-body-<?php echo $index; ?>">
            <span class="overflow-hidden whitespace-nowrap max-w-full"><?php echo $questions; ?></span>
            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
            </svg>
          </button>
        </h2>
        <div id="accordion-collapse-body-<?php echo $index; ?>" class="hidden" aria-labelledby="accordion-collapse-heading-<?php echo $index; ?>">
          <div class="long-text p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
            <p class="mb-2 text-white"><?php echo $answers; ?></p>
          </div>
        </div>
      </div>
    </div>

    <?php $index++; ?>
  <?php endwhile; ?>
<?php endif; ?>



</div>





















----------------------------------------------------











