<?php $image = get_field('image'); ?>
<?php include(locate_template('includes/block-registration-variables.php')); ?>

<?php $has_content = !empty($image);

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="photo-divider-container">
      <div class="photo-divider-row">
        <div class="photo-divider-col">
            <?php echo wp_get_attachment_image($image, 'full', false, array('class' => 'w-100 h-auto')) ?>
        </div>
      </div>
    </div>
</section>