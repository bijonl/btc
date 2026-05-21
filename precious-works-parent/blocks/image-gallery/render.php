<?php 
include(locate_template('blocks/partials/global-block-variables.php')); 

$images = get_field('images'); 
$number_of_columns = get_field('number_of_columns'); 


$has_content = $images || $has_button_area || $has_title_area;

if(!$has_content) {
    include __DIR__ . '/demo.php';
    return; 
} 

?>

<section <?php echo pw_block_section_classes($block) ?>>
    <?php if ($has_title_area) {
        include(locate_template('blocks/partials/title-area.php'));
    } ?>

    <?php if ($images) { ?>
        <div class="image-gallery-container container">
            <div class="image-gallery-row row row-cols-2 row-cols-lg-<?php echo esc_attr($number_of_columns); ?>" role="list">
                <?php foreach ($images as $image_id) { 
                    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    if (!$alt) {
                        $alt = get_the_title($image_id); // fallback if alt text is missing
                    }
                    $full_image_url = wp_get_attachment_url($image_id);
                ?>
                    <div class="image-gallery-col col columns-<?php echo esc_attr($number_of_columns); ?>" role="listitem">
                        <figure class="gallery-image mb-4">
                            <a 
                                href="<?php echo esc_url($full_image_url); ?>" 
                                class="glightbox" 
                                data-gallery="image-gallery-block"
                                aria-label="View larger image of <?php echo esc_attr($alt ?: 'gallery image'); ?>"
                            >
                                <?php echo wp_get_attachment_image($image_id, 'full', false, array(
                                    'class' => 'w-100 h-auto',
                                    'alt' => esc_attr($alt),
                                    'loading' => 'lazy'
                                )); ?>
                            </a>
                        </figure>
                    </div>
                <?php } ?>
            </div>

            <?php if ($section_button) { ?>
                <div class="button-row row">
                    <div class="button-col col-12 text-center">
                        <?php include(locate_template('blocks/partials/button-area.php')); ?>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</section>
