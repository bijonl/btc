<div class="single-accordion">
    <button class="accordion" data-accordion-id="<?php echo $accordion_id ?>">
        <h6 class="mb-0"><?php echo $title ?></h6>
        <?php include(locate_template('blocks/accordions/partials/accordion-button.php'));  ?>       
    </button>
  <div class="accordion-content" id="<?php echo $accordion_id ?>" >
    <?php echo $content ?>
  </div>
</div>
