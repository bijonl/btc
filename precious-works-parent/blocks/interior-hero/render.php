<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$hero_image = get_field('hero_image'); 
$hero_image_alt = get_field('hero_image_alt') ?: get_post_meta($hero_image, '_wp_attachment_image_alt', true);

$image_url = wp_get_attachment_url($hero_image);

?>

<?php $has_content = $hero_image || $has_button_area || $has_title_area;
$display_title = 'h2 mb-0'; 

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} ?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="interior-hero-container">
        <div class="interior-hero-row align-items-center h-100">
            <div class="interior-hero-col">
                <div class="interior-hero-content-wrapper d-sm-flex align-items-center">
                    <div class="title-wrapper">
                        <div class="title-content-wrapper d-flex flex-column m-sm-auto text-center text-sm-start">
                            <?php if($section_title) { ?>
                                <div class="big-title-wrapper">
                                    <?php echo pw_seo_heading($section_title, $section_title_tag, $display_title) ?>
                                </div>
                            <?php } ?>
                           
                            <?php if($section_subtitle){ ?>
                                <div class="subtitle-wrapper">
                                    <?php echo $section_subtitle ?>
                                </div>
                            <?php }; ?>
                            <?php include(locate_template('blocks/partials/button-area.php'));  ?>
                        </div>
                    </div>
                    <?php if($hero_image && $image_url) { ?>
                        <div class="image-wrapper" 
                            style="background-image: url('<?php echo esc_url($image_url) ?>')"
                            role="img"
                            aria-label="<?php echo esc_attr($hero_image_alt ?: 'Hero image'); ?>">
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </div>
</section>