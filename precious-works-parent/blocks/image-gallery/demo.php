<?php
/**
 * Demo placeholder for Image Gallery block
 */


// Number of columns fallback
$number_of_columns = $number_of_columns ?? 3;

// Demo images (placeholder URLs)
$demo_images = [
    'https://placehold.co/600x400?text=Image+1',
    'https://placehold.co/600x400?text=Image+2',
    'https://placehold.co/600x400?text=Image+3',
    'https://placehold.co/600x400?text=Image+4',
    'https://placehold.co/600x400?text=Image+5',
];
?>

<section <?php echo pw_block_section_classes($block); ?>>
    <?php if ($has_title_area) {
        include(locate_template('blocks/partials/title-area.php'));
    } ?>

    <div class="image-gallery-container container">
        <div class="image-gallery-row row row-cols-<?php echo esc_attr($number_of_columns); ?>" role="list">
            <?php foreach ($demo_images as $index => $image_url) { ?>
                <div class="image-gallery-col col columns-<?php echo esc_attr($number_of_columns); ?>" role="listitem">
                    <figure class="gallery-image mb-4">
                        <a 
                            href="<?php echo esc_url($image_url); ?>" 
                            class="glightbox" 
                            data-gallery="image-gallery-block"
                            aria-label="View larger image of Demo Image <?php echo $index + 1; ?>"
                        >
                            <img 
                                src="<?php echo esc_url($image_url); ?>" 
                                alt="Demo Image <?php echo $index + 1; ?>" 
                                class="w-100 h-auto"
                                loading="lazy"
                            />
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
</section>
