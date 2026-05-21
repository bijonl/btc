<?php 
// Demo content for Interior Hero Block
$demo_section_title = 'Welcome to Our Amazing Service';
$demo_section_subtitle = 'Discover innovative solutions that transform your business and drive success in the digital age.';
$demo_image_url = 'https://placehold.co/1000x1000?text=Demo';
$demo_image_alt = 'Modern office building with glass facade representing professional business services';
$demo_button_text = 'Get Started Today';
$demo_button_url = '#demo-link';
?>

<section <?php echo pw_block_section_classes($block) ?>>
    <div class="interior-hero-container">
        <div class="interior-hero-row align-items-center h-100">
            <div class="interior-hero-col">
                <div class="interior-hero-content-wrapper d-sm-flex align-items-center">
                    <div class="title-wrapper">
                        <div class="title-content-wrapper d-flex flex-column m-sm-auto text-center text-sm-start">
                            <div class="big-title-wrapper">
                                <h2 class="h2 mb-0"><?php echo esc_html($demo_section_title); ?></h2>
                            </div>
                            <div class="subtitle-wrapper">
                                <p class="lead"><?php echo esc_html($demo_section_subtitle); ?></p>
                            </div>
                            <div class="button-area mt-3">
                                <a href="<?php echo esc_url($demo_button_url); ?>" 
                                    class="pw-solid-button"
                                    role="button"
                                    aria-label="<?php echo esc_attr($demo_button_text . ' - demo link'); ?>">
                                    <?php echo esc_html($demo_button_text); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="image-wrapper" 
                         style="background-image: url('<?php echo esc_url($demo_image_url); ?>')"
                         role="img"
                         aria-label="<?php echo esc_attr($demo_image_alt); ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>