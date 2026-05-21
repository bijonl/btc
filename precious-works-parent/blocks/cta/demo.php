<?php
/**
 * Demo placeholder for CTA block
 */

// Demo content
$demo_title = 'Ready to Get Started?';
$demo_subtitle = 'Sign up today and start seeing results immediately.';
$demo_button = [
    'url' => '#',
    'title' => 'Sign Up Now',
    'target' => '_self',
];

// Override block variables for demo
$has_title_area = true;
$has_button_area = true;
$section_title = $demo_title;
$section_title_tag = 'h2';
$section_subtitle = $demo_subtitle;
$section_button = $demo_button;
?>

<section <?php echo pw_block_section_classes($block); ?>>
    <div class="cta-container container">
        <div class="cta-row row">
            <div class="cta-col col-6 mx-auto text-center">
                <?php if ($section_title) { ?>
                    <div class="cta-title-wrapper">
                        <?php echo pw_seo_heading($section_title, $section_title_tag, 'h2'); ?>
                    </div>
                <?php } ?>
                <?php if ($section_subtitle) { ?>
                    <div class="cta-subtitle-wrapper">
                        <?php echo esc_html($section_subtitle); ?>
                    </div>
                <?php } ?>
                <?php include(locate_template('blocks/partials/button-area.php')); ?>
            </div>
        </div>
    </div>
</section>
