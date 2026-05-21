<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$content = get_field('content'); ?>

<?php $has_content = !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php include(locate_template('blocks/partials/title-area.php')); ?>
    <div class="general-content-container container">
        <div class="general-content-row row">
            <div class="general-content-col col-12">
                <?php echo $content ?>
            </div>
        </div>
    </div>
    <?php include(locate_template('blocks/partials/button-area.php')); ?>
</section>