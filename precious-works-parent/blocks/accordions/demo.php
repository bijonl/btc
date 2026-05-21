<?php 
// Demo Accordion Block
$accordion_width = 'col-sm-8'; 
?>

<section <?php echo pw_block_section_classes($block) ?>>
  <div class="title-area-container container" aria-label="FAQs Section">
    <div class="title-area-row row">
      <div class="title-area-col col text-center">
        <div class="title-area-content-wrapper">
          <div class="title-wrapper">
            <h2>Frequently Asked Questions</h2>
          </div>
          <div class="subtitle-wrapper">
            <p>Here's everything you need to know before getting started.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="accordions-container container">
    <div class="accordions-row row">
      <div class="accordions-col <?php echo $accordion_width ?> mx-auto">

        <!-- Accordion 1 -->
        <div class="single-accordion">
          <button class="accordion" data-accordion-id="accordion-1" aria-expanded="false" aria-controls="accordion-1-content">
            <h6 class="mb-0">What is your refund policy?</h6>
            <?php include(locate_template('blocks/accordions/partials/accordion-button.php')); ?>
          </button>
          <div 
            class="accordion-content wysiwyg" 
            id="accordion-1-content" 
            role="region" 
            aria-labelledby="accordion-1"
          >
            <p>We offer a full refund within 30 days of purchase, no questions asked.</p>
          </div>
        </div>

        <!-- Accordion 2 -->
        <div class="single-accordion">
          <button class="accordion" data-accordion-id="accordion-2" aria-expanded="false" aria-controls="accordion-2-content">
            <h6 class="mb-0">Do I need a developer to install this?</h6>
            <?php include(locate_template('blocks/accordions/partials/accordion-button.php')); ?>
          </button>
          <div 
            class="accordion-content wysiwyg" 
            id="accordion-2-content" 
            role="region" 
            aria-labelledby="accordion-2"
          >
            <p>Nope! Everything installs with a single click and is beginner friendly.</p>
          </div>
        </div>

      </div>
    </div>

    <div class="button-row row">
      <div class="button-col <?php echo $accordion_width ?> mx-auto text-center">
        <a href="/contact" class="btn btn-primary">Still have questions?</a>
      </div>
    </div>
  </div>
</section>
