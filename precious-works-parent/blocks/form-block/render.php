<?php 
$form_width = get_field('form_width') ? get_field('form_width') : 12 ; 
include(locate_template('blocks/partials/global-block-variables.php')); 

$form_id = get_field('form_id'); ?>

<?php $has_content = !empty($form_id) || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="form-block-container container">
        <div class="form-block-row row">
            <div class="form-block-col col-<?php echo $form_width ?> mx-auto">
                <?php echo do_shortcode('[gravityform id="' . $form_id . '" title="false" description="false" ajax="true" tabindex="49"]'); ?>
            </div>
        </div>
    </div>
</section>