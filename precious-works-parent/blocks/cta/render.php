<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$content = get_field('content'); ?>

<?php $has_content = !empty($content) || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="cta-container container">
        <div class="cta-row row">
            <div class="cta-col col-sm-6 mx-auto text-center">
                <?php if($section_title) { ?>
                    <div class="cta-title-wrapper">
                        <?php echo pw_seo_heading($section_title, $section_title_tag, 'h2') ?>
                    </div>
                <?php } ?>
                <?php if($section_subtitle) { ?>
                    <div class="cta-subtitle-wrapper">
                        <?php echo $section_subtitle ?>
                    </div>
                <?php } ?>
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>
    </div>
</section>